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
</head>
<body>
<div class="registrationform" id="registrationform">
    <form action="main.php" method="post">
        <table align="center">
            <tr>
                <td>First Name</td>
                <td>: <input type="text"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>: <input type="text"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td>: <input type="text"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>: <input type="text"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>: <input type="password"></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td>: <input type="password"></td>
            </tr>
            <tr>
                <td>Occupation</td>
                <td>: <input type="text"></td>
            </tr>
            <tr>
                <td>Contact No.</td>
                <td>: <input type="text"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:
                    <input type="radio" name="gender" value="male" checked>Male
                    <input type="radio" name="gender" value="female">Female
                </td>
            </tr>
            <tr>
                <td>Picture</td>
                <td>: <input type="text"> <button>Browse</button></td>
            </tr>
            <tr>
                <td>Buyer Type</td>
                <td>:
                    <select>
                        <option value="corporate">Corporate</option>
                        <option value="personal">Personal</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="10"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>