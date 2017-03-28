<?php
/**
 * Created by PhpStorm.
 * User: Shahidul Islam
 * Date: 3/26/2017
 * Time: 12:03 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registartion</title>
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


<div class="registration-form" id="registrationform">
    <form action="main.php" method="post">
        <table class="registration-table">
            <tr>
                <td class="registration-table-first-name-text">First Name</td>
                <td class="registration-table-first-name-input">: <input type="text"></td>
            </tr>
            <tr>
                <td class="registration-table-last-name-text">Last Name</td>
                <td class="registration-table-last-name-input">: <input type="text"></td>
            </tr>
            <tr>
                <td class="registration-table-username-text">Username</td>
                <td class="registration-table-username-input">: <input type="text"></td>
            </tr>
            <tr>
                <td class="registration-table-email-text">Email</td>
                <td class="registration-table-email-input">: <input type="text"></td>
            </tr>
            <tr>
                <td class="registration-table-password-text">Password</td>
                <td class="registration-table-password-input">: <input type="password"></td>
            </tr>
            <tr>
                <td class="registration-table-confirm-password-text">Confirm Password</td>
                <td class="registration-table-confirm-password-input">: <input type="password"></td>
            </tr>
            <tr>
                <td class="registration-table-occupation-text">Occupation</td>
                <td class="registration-table-occupation-input">: <input type="text"></td>
            </tr>
            <tr>
                <td class="registration-table-contact-text">Contact No.</td>
                <td class="registration-table-contact-input">: <input type="text"></td>
            </tr>
            <tr>
                <td class="registration-table-gender-text">Gender</td>
                <td class="registration-table-gender-input">:
                    <input type="radio" name="gender" value="male" checked>Male
                    <input type="radio" name="gender" value="female">Female
                </td>
            </tr>
            <tr>
                <td class="registration-table-picture-text">Picture</td>
                <td class="registration-table-picture-input">: <input class="registration-table-picture-browse" type="text"><input class="registration-table-picture-browse-button" type="button" value="Browse"></td>
            </tr>
            <tr>
                <td class="registration-table-buyer-text">Buyer Type</td>
                <td class="registration-table-buyer-input">:
                    <select>
                        <option value="corporate">Corporate</option>
                        <option value="personal">Personal</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="10" class="registration-table-submit-button"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</div>


<!-- footer -->
<div class="footer" id="footer">
    <div class="footer-content">
        <p>Copyright © 2017. All Rights Reserved by <b>Hexaparity</b>.</p>
    </div>
</div>

</body>
</html>