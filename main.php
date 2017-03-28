<?php
/**
 * Created by PhpStorm.
 * User: Shahidul Islam
 * Date: 3/26/2017
 * Time: 11:41 AM
 */
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kinte Chai</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<!-- header -->
<div class="header" id="header">
    <div class="header-site">
        <a href="#" class="header-site-name">
            <h1>KINTE CHAI</h1>
        </a>
    </div>
</div>

<div>
<!-- login or create account -->
    <div class="main-account-panel" id="mainaccountpanel">
        <a href="login.php" class="main-login-button">
            <input class="main-login-button-input" type="button" value="Login">
        </a>
        <span>OR</span>
        <a href="registration.php " class="main-create-account-button">
            <input class="main-create-account-button-input" type="button" value="Sign up">
        </a>
    </div>

    <div class="main-product-panel-head">
        <div class="main-product-panel-head-text" id="mainproductpanelheadtext">
            <h2>Available Products</h2>
        </div>
    </div>

    <div class="mainrelatedproduct" id="mainrelatedproduct">
        <table>
            <tr>
                <td><img src="img/demo.png" alt="demo"></td>
                <td><img src="img/demo.png" alt="demo"></td>
                <td><img src="img/demo.png" alt="demo"></td>
                <td><img src="img/demo.png" alt="demo"></td>
                <td><img src="img/demo.png" alt="demo"></td>
            </tr>
        </table>
    </div>
</div>


<!-- footer -->
<div class="footer" id="footer">
    <div class="footer-content">
        <p>Copyright © 2017. All Rights Reserved by <b>Hexaparity</b>.</p>
    </div>
</div>

</body>
</html>