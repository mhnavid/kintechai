<?php
/**
 * Created by PhpStorm.
 * User: Shahidul Islam
 * Date: 4/6/2017
 * Time: 2:51 PM
*/
function getJSONFromDB($sql){
    $conn = mysqli_connect("localhost", "root", "","user_table");

    //echo $sql;
    $result = mysqli_query($conn, $sql)or die(mysqli_error());
    $arr=array();
    while($row = mysqli_fetch_assoc($result)) {
        $arr[]=$row;
    }
    return json_encode($arr);
}
function updateSQL($sql){
    $conn = mysqli_connect("localhost", "root", "","user_table");
    //echo $sql;
    $result = mysqli_query($conn, $sql)or die(mysqli_error());
    return $result;
}
$s="insert into student values('".$_REQUEST['id']."','".$_REQUEST['name']."','".$_REQUEST['cg']."')";
$num=updateSQL($s);
echo $num." row(s) updated";