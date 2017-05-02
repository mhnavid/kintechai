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


    function getJSONFromDB($sql){
        $conn = mysqli_connect("localhost", "root", "","kintechai_db");
        $result = mysqli_query($conn, $sql)or die(mysqli_error());
        $arr=array();
        while($row = mysqli_fetch_assoc($result)) {
            $arr[]=$row;
        }
        return json_encode($arr);
    }

    $qu="SELECT * FROM ulogin";

    //echo getJSONFromDB($qu);

    $json = json_decode(getJSONFromDB($qu), true);

    foreach ($json as $key => $value) {
        if (!is_array($value)) {
            echo $key . '=>' . $value . '<br />';
        } else {
            foreach ($value as $key => $val) {
                echo $key . '=>' . $val . '<br />';
            }
        }
    }


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