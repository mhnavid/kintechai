<?php
/**
 * Created by PhpStorm.
 * User: Shahidul Islam
 * Date: 3/26/2017
 * Time: 12:03 PM
 */
require_once 'autoload.php';

onlyGuest();
?>

<!-- header -->
<?php include ("header.php");


?>


<div class="registration-form" id="registrationform">
    <form action="registrationvalidation.php" method="POST" enctype="multipart/form-data">
        <table class="registration-table">
            <tr>
                <td class="registration-table-first-name-text">First Name</td>
                <td class="registration-table-first-name-input">
                    : <input type="text" name="resfname" id="resfname">
                </td>
            </tr>
            <tr>
                <td class="registration-table-last-name-text">Last Name</td>
                <td class="registration-table-last-name-input">
                    : <input type="text" name="reslname" id="reslname">
                </td>
            </tr>
            <tr>
                <td class="registration-table-username-text">Username</td>
                <td class="registration-table-username-input">
                    : <input type="text" name="resuname" id="resuname">
                </td>
            </tr>
            <tr>
                <td class="registration-table-email-text">Email</td>
                <td class="registration-table-email-input">
                    : <input type="text" name="resemail" id="resemail" onkeyup="eamil_vail()"><br>
                <h6 id="email_req_id">* required</h6>
                </td>
            </tr>
            <tr>
                <td class="registration-table-password-text">Password</td>
                <td class="registration-table-password-input">
                    : <input type="password" name="respass" id="respass">
                </td>
            </tr>
            <tr>
                <td class="registration-table-confirm-password-text">Confirm Password</td>
                <td class="registration-table-confirm-password-input">
                    : <input type="password" name="resconfirmpass" id="resconfirmpass">
                </td>
            </tr>
            <tr>
                <td class="registration-table-occupation-text">Occupation</td>
                <td class="registration-table-occupation-input">
                    : <input type="text" name="resoccupation" id="resoccupation">
                </td>
            </tr>
            <tr>
                <td class="registration-table-contact-text">Contact No.</td>
                <td class="registration-table-contact-input">
                    : <input type="text" name="rescontact" id="rescontact">
                </td>
            </tr>
            <tr>
                <td class="registration-table-gender-text">Gender</td>
                <td class="registration-table-gender-input">:
                    <input type="radio" name="gender" value="male" id="mgender" checked>Male
                    <input type="radio" name="gender" value="female" id="fgender">Female
                </td>
            </tr>
            <tr>
                <td class="registration-table-picture-text">Picture</td>
                <td class="registration-table-picture-input">:
                    <input class="registration-table-picture-browse" type="file" name="picture">
            </tr>
            <tr>
                <td class="registration-table-buyer-text">Buyer Type</td>
                <td class="registration-table-buyer-input">:
                    <select name="type">
                        <option value="corporate">Corporate</option>
                        <option value="personal">Personal</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="10" class="registration-table-submit-button">
                    <input type="submit" value="Submit" onclick="return resvalid();" >
                </td>
            </tr>
        </table>
    </form>
</div>

<script type="text/javascript" src="registrationvalidation.js"></script>
<script type="text/javascript" src="email_check.js"></script>

<!-- footer -->
<?php include ("footer.php"); ?>
