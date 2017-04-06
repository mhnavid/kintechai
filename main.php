/**
 * Created by PhpStorm.
 * User: Shahidul Islam
 * Date: 3/26/2017
 * Time: 11:41 AM
 */
<!-- header -->

<?php include ("header.php"); ?>


<!-- login or create account -->
<div class="main-content">
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

    <div class="main-related-product" id="mainrelatedproduct">
        <table>
            <tr class="main-related-product-row">
                <td class="main-related-product-image-first"><img src="img/demo.png" alt="demo"></td>
                <td class="main-related-product-image"><img src="img/demo.png" alt="demo"></td>
                <td class="main-related-product-image"><img src="img/demo.png" alt="demo"></td>
                <td class="main-related-product-image"><img src="img/demo.png" alt="demo"></td>
            </tr>
            <tr class="main-related-product-row">
                <td class="main-related-product-image-first"><img src="img/demo.png" alt="demo"></td>
                <td class="main-related-product-image"><img src="img/demo.png" alt="demo"></td>
                <td class="main-related-product-image"><img src="img/demo.png" alt="demo"></td>
                <td class="main-related-product-image"><img src="img/demo.png" alt="demo"></td>
            </tr>
            <tr class="main-related-product-row">
                <td class="main-related-product-image-first"><img src="img/demo.png" alt="demo"></td>
                <td class="main-related-product-image"><img src="img/demo.png" alt="demo"></td>
                <td class="main-related-product-image"><img src="img/demo.png" alt="demo"></td>
                <td class="main-related-product-image"><img src="img/demo.png" alt="demo"></td>
            </tr>
        </table>
    </div>
</div>
<!-- footer -->
<?php include ("footer.php"); ?>

</body>
</html>