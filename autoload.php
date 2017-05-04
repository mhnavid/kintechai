<?php
/**
 * THIS FILE LOADS REQUIRED DEPENDENCIES IN EVERY PAGE
 * Created by PhpStorm.
 * User: Md Apu
 * Date: 5/3/2017
 * Time: 1:11 AM
 */
session_start(); //starting session

//--Constants

define('IMAGE_UPLOAD_PATH_USER', 'uploads/users/'); //User profile pics
define('IMAGE_UPLOAD_PATH_PRODUCT', 'uploads/products/'); //Product pics


//--LOADING CLASSES

//session
require_once 'Classes/Session.php';



//--LOADING OTHER HELPER FILES

//Database connection

require_once 'db.php';


//Helper Functions

require_once 'helpers.php';

//checking PHP version

PHPVer();

//storing user into session

getUserInfo(Session::get('user_id'), true);

