<?php
/**
 * Created by PhpStorm.
 * User: Shahidul Islam
 * Date: 5/2/2017
 * Time: 10:46 AM
 */
session_start();
if (isset($_POST['logemail'])&& isset($_POST['logpassword'])) {

    $email= $_POST['logemail'];
    $pass= $_POST['logpassword'];

//    echo $email,$pass;

//    include('db.php');
//
//    $q="select * from users where email='$email' and password='$pass'";
//
//    $result=mysql_query($q);
//    $row=mysql_fetch_array($result);

//    if($row['email']==$email&& $row['password']==$pass){
//        $_SESSION['email']=$email;
//        $_SESSION['password']=$pass;
//        $_SESSION['id']=$row['id'];
//        header('Location: user.php');
//    }
//    else{
//        header('Location: login.php?error=1');
//    }
}
?>