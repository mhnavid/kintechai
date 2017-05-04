<?php
require_once 'autoload.php';

//preceding only if user is logged iny
protectedAccess();

// getUserInfo(Session::get('user_id'));

$user = Session::get('user');


$profileImg = ($user->image) ? IMAGE_UPLOAD_PATH_USER.$user->image : 'img/profile-picture.jpg'; //profile pic

//<!-- header -->
include ("header.php");

include ("headeroption.php");

?>

<div class="userpage-user">
	<div class="userpage-user-photo">
		<img src="<?php echo $profileImg ?>" alt="User Image"><br>
		<input type="button" value="Change picture">
	</div>
	<div class="userpage-user-details">
		<table>
			<tr>
				<td>Full Name </td>
				<td>: <span><?php echo $user->fname .' '.$user->lname ?></span></td>
			</tr>
			<tr>
				<td>Mail</td>
				<td>: <span><?php echo $user->email; ?></span></td>
			</tr>
			<tr>
				<td colspan="2" class="userpage-product">
					<a href="productInput.php">
						<input class="userpage-product-button" type="button" value="Upload product">
					</a>
                  	
				</td>
			</tr>
		</table>
	</div>
</div>

<div class="userpage-user-product">
	<h1>Your Product</h1>
</div>

<div>
	<div class="main-related-product" id="mainrelatedproduct">
        <table>
            <tr class="main-related-product-row" id="products-user">
                <!--<td class="main-related-product-image"><img src="img/demo.png" alt="demo"></td>-->
            </tr>
        </table>
    </div>
</div>

<!-- footer -->

<script src="js/jquery-1.6.2.js"></script>
<script src="js/axios.min.js"></script>
<script src="js/AJAX.js"></script>
<script>
    $(document).ready(function () {

        //load all products when document get's loaded

        $.bind('load', getAllProducts('getproductsuser.php', 0, 12, '#products-user', '1'));

    });
</script>

<?php include ("footer.php"); ?>
