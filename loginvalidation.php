<?php
/**
 * Created by PhpStorm.
 * User: Shahidul Islam
 * Date: 5/2/2017
 * Time: 10:46 AM
 */
require_once 'autoload.php';

if (isset($_POST['logemail'])&& isset($_POST['logpassword'])) { //if login form submitted

    $email= $_POST['logemail'];
    $pass= md5(trim($_POST['logpassword']));
	
	
	if (empty($email) || empty($pass)) { //if login form submitted with empty string
		
		jsRedirect('/login.php?error=3');
		
 	} else {
		
		$loginSQL = "SELECT `ucontacts_id` AS `id` FROM `ulogin`
					 WHERE `email` = '$email' AND `password` = '$pass'
					";
		
		$result = getFromDB($loginSQL, false, true) ?? null;
		
		if ($result) { //if user found
			
			Session::put('user_id', $result->id);
			
			setcookie('user_type', 'user', time()+60*60*24*7, '/');
			
			jsRedirect('/userpage.php');
		} else {
			
			jsRedirect('/login.php?error=1');
		}
 	}
}







?>
