<?php
/**
 * Created by PhpStorm.
 * User: Shahidul Islam
 * Date: 5/2/2017
 * Time: 10:37 AM
 */
session_start();
session_destroy();
setcookie('user_type', 'guest', time()+60*60*24*7, '/');
header('Location: login.php?success=2');
 ?>
