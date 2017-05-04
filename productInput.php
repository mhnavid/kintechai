<?php
require_once 'autoload.php';

protectedAccess();

$user = Session::get('user');

?>
<!-- header -->
<?php include ("header.php");?>

<?php include ("headeroption.php");?>


<form action="product_upload_processor.php" method="POST" enctype="multipart/form-data">
	<div class="productInput">
		<table>
			<tr class="productInput-image">
				<td><img src="img/demo.png"></td>
			</tr>
			<tr class="productInput-details">
				<td>
					<span>Name *</span>
					<input type="text" name="product-name"><br>
                    <span>Image</span>
                    <input type="file" name="product-image"><br>
					<span>Short Description</span><br>
					<textarea rows="4" cols="50" name="product-desc"></textarea><br>
					<span>Price range *</span><br>
					<input type="number" name="product-price-from">
					<span>To *</span>
					<input type="number" name="product-price-to">
				</td>
			</tr>
            <tr>
				<?php if(isset($_GET['success'])&& $_GET['success']==1) echo "Product upload successful" ?>
				<?php if(isset($_GET['error'])&& $_GET['error']==1) echo "All * marked fields are mandatory" ?>
            </tr>
		</table>
	</div>
	<div class="productInput-submit">
		<input class="productInput-submit-button" type="Submit" name="product-upload" value="Submit">
	</div>
		
</form>
