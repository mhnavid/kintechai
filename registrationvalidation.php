<?php
/**
 * Created by PhpStorm.
 * User: Shahidul Islam
 * Date: 4/6/2017
 * Time: 9:07 AM
 */
require_once 'autoload.php';

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
    $utype = $_POST['type']; //data fetch problem -->> which is fixed ;D
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
	
    
// Processing Image Upload
	
	$image = fileUpload('picture', IMAGE_UPLOAD_PATH_USER);
	
    
    if ($flag!=1){
		
//        update database information
        $q1 = "insert into ucontacts (contactno) values ('$ucontact')";
        
        $q2 = "	insert into uinformation (fname, lname, occupation, gender, `type`, `image`)
				values ('$ufname', '$ulname', '$uoccupation', '$ugender', '$utype', '$image')";
        
        $q3 = "	insert into ulogin (username, email, password)
				values ('$uname', '$uemail', '".md5(trim($upass))."')";
		
        updateSQL($q1);
        updateSQL($q2);
        updateSQL($q3);
		
        
        jsRedirect('/login.php?success=1'); //redirects using javascript

    }
}
