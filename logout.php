<?php
/**
 * Created by PhpStorm.
 * User: Shahidul Islam
 * Date: 5/2/2017
 * Time: 10:37 AM
 */
session_start();
session_destroy();
header('Location: login.php?success=2');
 ?>