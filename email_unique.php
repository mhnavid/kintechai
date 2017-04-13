<?php
/**
 * Created by PhpStorm.
 * User: saumyashovanroy
 * Date: 4/13/17
 * Time: 3:08 PM
 */


function getJSONFromDB($sql){
    $conn = mysqli_connect("localhost", "root", "","kintecahi_demo");
    $result = mysqli_query($conn, $sql)or die(mysqli_error());
    $arr=array();
    while($row = mysqli_fetch_assoc($result)) {
        $arr[]=$row;
    }
    return json_encode($arr);
}

$qu="select * from user_Demo";

print_r(getJSONFromDB($qu));