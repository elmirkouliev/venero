<?php

session_start();



if($_REQUEST['product_id'] && $_REQUEST['size']){

	$product_id = $_REQUEST['product_id'] ;
	$size = $_REQUEST['size'];

	if($cart = $_SESSION['cart']){
			
		$cart =  json_decode($_SESSION['cart'],true);

		array_push(
			$cart, 
			array("product_id" => $product_id , "size" => $size)
		);

		print_r($cart);

		$_SESSION['cart'] = json_encode($cart);
	
	}
	else{

		$item = array("0" => array("product_id" => $product_id , "size" => $size));

		$_SESSION['cart'] = json_encode($item);

	}

}

?>