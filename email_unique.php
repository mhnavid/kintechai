<?php
/**
 * Created by PhpStorm.
 * User: saumyashovanroy
 * Date: 4/13/17
 * Time: 3:08 PM
 */
require_once 'autoload.php';


$qu="SELECT * FROM ulogin";

echo getFromDB($qu, true);
