<?php
/**
 * Created by PhpStorm.
 * User: Md Apu
 * Date: 5/3/2017
 * Time: 8:33 PM
 */
require_once 'autoload.php';

$start = $_POST['start'] ?? 0;
$amount= $_POST['amount'] ?? 12;

$currentUserID = Session::get('user_id');


$sql = 	"SELECT * FROM `products` LIMIT {$start},{$amount}";

echo $results = getFromDB($sql, true);


