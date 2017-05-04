<?php
/**
 * Created by PhpStorm.
 * User: Shahidul Islam
 * Date: 4/6/2017
 * Time: 2:51 PM
*/

// $conn = mysqli_connect("localhost", "root", "","kintechai_db");
$stmt = new Mysqli('localhost', 'root', '', 'kintechai_db');

/**
 * Gets results from DB as @param1
 * @param1 string 	$sql				The RAW SQL to get data
 * @param2 bool 	$returnTypeJSON		If TRUE then returns results as JSON
 * @param3 bool 	$firstResultOnly	if TRUE then returns only first result which is not JSON
 * @return array|bool|mixed|string
 */
function getFromDB($sql, $returnTypeJSON=false, $firstResultOnly = false){
    GLOBAL $stmt;
	//echo $sql;
    $result = $stmt->query($sql);
	
	if ($error = $stmt->error) {
		
		die($error);
    }
    
    $arr=array();
    
    while($row = $result->fetch_object()) {
        $arr[]=$row;
    }
	
	if ($returnTypeJSON == true) {  //Only Return JSON if requested
		
		return json_encode($arr);
		
	} else if ($firstResultOnly == true) {
		
    	return $arr[0] ?? false;
	}
	
	return $arr;
	
}

function updateSQL($sql){
	GLOBAL $stmt;
    //echo $sql;
    $results = $stmt->query($sql);
	
	if ($error = $stmt->error) {
		
		die($error);
	}
	
	return $results;
}


/**
 * THE FOLLOWING CODE IS IRRELEVANT TO THIS PROJECT so IT HAS BEEN COMMENTED OUT
 */
//
// $s="insert into student values('".$_REQUEST['id']."','".$_REQUEST['name']."','".$_REQUEST['cg']."')";
// $num=updateSQL($s);
// echo $num." row(s) updated";

/**
 * RETRIEVES USER INFO FROM ALL 3 TABLES
 * @param mixed	$userID		currently logged in user id
 * @param bool 	$putSession If true puts user(object) details into session or returns user object
 * @return array|bool|mixed|string
 */
function getUserInfo($userID, $putSession=false) {
	
	if (Session::exists('user_id')) { //if user not logged in
	
		$sql = "SELECT *, `ulogin`.`username` AS `username`, `ucontacts`.`contactno` AS `contact`
			FROM `uinformation`
			LEFT JOIN `ulogin`
			  ON `ulogin`.`ucontacts_id` = `uinformation`.`ucontacts_id`
			LEFT JOIN `ucontacts`
			  ON `uinformation`.`ucontacts_id` = `ulogin`.`ucontacts_id`
			WHERE `uinformation`.`ucontacts_id` = {$userID}
			";
		
		$user = getFromDB($sql, false, true); //array of objects
		
		if ($putSession) {
			
			Session::put('user', $user);
			return true;
		} else {
			
			return $user;
		}
	}
	
	return true;
}
