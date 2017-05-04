<?php
/**
 * Created by PhpStorm.
 * User: Shahidul Islam
 * Date: 3/25/2017
 * Time: 6:30 PM
 */
require_once 'autoload.php';

onlyGuest();
?>
<!-- header -->
<?php include ("header.php");?>

<!--login page content -->
<form action="loginvalidation.php" method="post">
    <table class="login-input-table">
        <tr class="login-email-or-username">
            <td class="login-email-or-username-text"><label for="username">Email</label></td>
            <td class="login-email-or-username-input">: <input id="username" type="text" name="logemail"></td>
        </tr>
        <tr>
            <td class="login-password-text"><label for="password">Password</label></td>
            <td class="login-password-input">: <input id="password" type="password" name="logpassword"></td>
        </tr>
        <tr class="login-submit-button">
            <td colspan="2"><input type="submit" value="Submit"></td>
            <?php if(isset($_GET['success'])&& $_GET['success']==1) echo "You have registered successfully." ?>
            <?php if(isset($_GET['success'])&& $_GET['success']==2) echo "You have logged out successfully." ?>
            <?php if(isset($_GET['error'])&& $_GET['error']==1) echo "Email/Password Wrong." ?>
            <?php if(isset($_GET['error'])&& $_GET['error']==2) echo "you should login first." ?>
            <?php if(isset($_GET['error'])&& $_GET['error']==3) echo "you did not provided credentials." ?>
        </tr>
    </table>
</form>

<!-- footer -->
<?php include ("footer.php"); ?>
