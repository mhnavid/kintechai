<?php
/**
 * Created by PhpStorm.
 * User: Shahidul Islam
 * Date: 3/26/2017
 * Time: 11:41 AM
 */

include_once 'header.php';
?>

<div class="main-content">
<!-- login or create account -->

    <div class="main-account-panel" id="mainaccountpanel">
        
        <?php if (!Session::get('user_id')) { ?> <!--displays only if user is not authenticated-->
        
            <a href="login.php" class="main-login-button">
                <input class="main-login-button-input" type="button" value="Login">
            </a>
            <span>OR</span>
            <a href="registration.php " class="main-create-account-button">
                <input class="main-create-account-button-input" type="button" value="Sign up">
            </a>
        <?php } ?>
    </div>

    <div class="main-product-panel-head">
        <div class="main-product-panel-head-text" id="mainproductpanelheadtext">
            <h2>Available Products</h2>
        </div>
    </div>

    <div class="main-related-product" id="mainrelatedproduct">
        <table>
            <tr class="main-related-product-row" id="products-all"></tr>
        </table>
    </div>
</div>
<!-- footer for mainpage -->

<script src="js/jquery-1.6.2.js"></script>
<script src="js/axios.min.js"></script>
<script src="js/js.cookie.js"></script>
<script src="js/AJAX.js"></script>
<script>
    $(document).ready(function () {

        //load all products when document get's loaded

        $.bind('load', getAllProducts('getproductsall.php', 0, 12, '#products-all'));
        
        //redirecting user if clicked in product pic but not logged in
        
        console.log(Cookies.get('user_type'));
        if (Cookies.get('user_type') === 'guest' || Cookies.get('user_type') === undefined) {
            
            $('.productImg').live({
                click: function () {
                    window.location = '/login.php?error=2';
                }
            });
        }
    });
</script>
<?php include_once 'footer.php'?>
