<?php
/**
 * Created by PhpStorm.
 * User: Shahidul Islam
 * Date: 4/6/2017
 * Time: 9:07 AM
 */
if ($_POST) {

    $ufname = $_POST['resfname'];
    $ulname = $_POST['reslname'];
    $uname = $_POST['resuname'];
    $uemail = $_POST['resemail'];
    $upass = $_POST['respass'];
    $uconfirmpass = $_POST['resconfirmpass'];
    $uoccupation = $_POST['resoccupation'];
    $ucontact = $_POST['rescontact'];
    $ugender = $_POST['gender'];
    //$utype = $_POST['type']; //data fetch problem
    $flag=0;

    //echo $ufname,$ulname,$uname,$uemail,$upass,$uconfirmpass,$uoccupation,$ucontact,$ugender;

    if ($ufname==""){
        $flag=1;
//        echo "0";
    }
    if ($ulname==""){
        $flag=1;
//        echo "1";
    }
    if ($uname==""){
        $flag=1;
//        echo "2";
    }
    if ($uemail=="" || filter_var($uemail,FILTER_VALIDATE_EMAIL)==false){
        $flag=1;
        echo "3";
    }
    if ($upass==""||$upass!=$uconfirmpass){
        $flag=1;
//        echo "4";
    }
    if ($ugender=="" &&($ugender!="male" || $ugender!="female")) {
        $flag = 1;
//        echo "5";
    }
    if ($uoccupation==""){
        $flag=1;
//        echo "6";
    }
    if ($ucontact==""){
        $flag=1;
//        echo "7";
    }
//    database insert function
    function updateSQL($sql){
        $conn = mysqli_connect("localhost", "root", "","kintechai_db");
        //echo $sql;
        $result = mysqli_query($conn, $sql)or die(mysqli_error());
        return $result;
    }
    if ($flag!=1){
//        update database information
        $q="insert into user_table (username,password) values ('".$uname."','".$upass."')";
        updateSQL($q);
        header('Location: login.php?success=1');
        echo die();

    }
}
