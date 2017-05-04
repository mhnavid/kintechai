<?php
/**
 * Created by PhpStorm.
 * User: Md Apu
 * Date: 5/3/2017
 * Time: 6:09 PM
 */
require_once 'autoload.php';

protectedAccess();

//starting validation

if (isset($_POST['product-upload'])) {
	
	$productInfo = [ // product upload form data
		
		'name' 	=> htmlentities($_POST['product-name'], ENT_QUOTES, 'UTF-8'),
		'image'	=> $_FILES['product-image'] ?? null,
		'desc'	=> htmlentities($_POST['product-desc'] ?? null,ENT_QUOTES, 'UTF-8'),
		'price_from'	=> $_POST['product-price-from'],
		'price_to'		=> $_POST['product-price-to']
	];
	
	//required data
	$requiredInfo = [$productInfo['name'], $productInfo['price_from'], $productInfo['price_to']];
	
	foreach ($requiredInfo as $info) {
		
		if (empty($info)) {
			
			jsRedirect('/productinput.php?error=1');
			return false;
		}
	}
	
	//uploading image
	
	$image = fileUpload('product-image', IMAGE_UPLOAD_PATH_PRODUCT);
	
	$userID = Session::get('user_id');
	
	$productSQL = 	"INSERT INTO `products` (`user_id`, `name`, `image`, `description`, `price_range_from`, `price_range_to`)
					 VALUES ({$userID},'{$productInfo['name']}','{$image}','{$productInfo['desc']}','{$productInfo['price_from']}','{$productInfo['price_to']}')
					";
	
	updateSQL($productSQL);

	//redirecting user
	
	jsRedirect('/productinput.php?success=1');
}
