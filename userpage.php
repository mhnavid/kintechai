<!-- header -->
<?php include ("header.php");?>

<?php include ("headeroption.php");?>



<div class="userpage-user">
	<div class="userpage-user-photo">
		<img src="img/demo.png"><br>
		<input type="button" value="Change picture">
	</div>
	<div class="userpage-user-details">
		<table>
			<tr>
				<td>Full Name </td>
				<td>: <span>Test User</span></td>
			</tr>
			<tr>
				<td>Mail</td>
				<td>: <span>example@gmail.com</span></td>
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
<!-- <?php include ("footer.php"); ?> -->