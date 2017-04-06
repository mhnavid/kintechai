<?php
/**
 * Created by PhpStorm.
 * User: Shahidul Islam
 * Date: 3/25/2017
 * Time: 6:30 PM
 */
?>
<!-- header -->
<?php include ("header.php"); ?>

<!--login page content -->
<form action="#" method="post">
    <table class="login-input-table">
        <tr class="login-email-or-username">
            <td class="login-email-or-username-text">Email or Username</td>
            <td class="login-email-or-username-input">: <input type="text"></td>
        </tr>
        <tr>
            <td class="login-password-text">Password</td>
            <td class="login-password-input">: <input type="password"></td>
        </tr>
        <tr class="login-submit-button">
            <td colspan="2"><input type="submit" value="Submit"></td>
        </tr>
    </table>
</form>

<!-- footer -->
<?php include ("footer.php"); ?>
