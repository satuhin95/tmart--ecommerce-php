<?php
session_start();
// session_destroy();
// die();
include 'db.php';

if ($_SERVER['REQUEST_METHOD']=='POST') {
	$db = new Database();
	$ids = $_POST['ids'];
	$qty = (int) $_POST['qty'];
	$color = (int) isset($_POST['color'])?$_POST['color']:0;
	$size = (int) isset($_POST['size'])?$_POST['size']:0;
	//
	// $ids = 34;
	// $qty = 15;
	// $color = 8;
	// $size = 6;

	$stock = 0;
	$psid = 0;

	$db = new Database();
	$data = array(
		'product_id'=> $ids,
		'size_id'=> $size,
		'color_id'=> $color
	);
	$status = $db->view("*", "product_stock", "", $data);
	while ($d = $status->fetch_object()) {
		$psid = $d->id;
		$stock = $d->stock;
	}

	$status = $db->view("*", "order_dtails", "", ['product_stock_id'=>$psid]);
	if($status->num_rows > 0){
		while ($d = $status->fetch_object()) {
			$stock -= $d->quantity;
		}
	}

	if($stock >= $qty){
		if(isset($_SESSION['pdtid'])){
			$pdtid = $_SESSION['pdtid'];
			$qtyid = $_SESSION['qtyid'];
			$colorid = $_SESSION['colorid'];
			$sizeid = $_SESSION['sizeid'];

			$index = array_search($ids, $pdtid);
			if($index !== false){
				$counter = 0;
				foreach ($pdtid as $key => $value) {
					if($value == $ids){
						if($colorid[$key] == $color && $sizeid[$key] == $size){
							$counter++;
							break;
						}
					}
				}
				if($counter){
					$_SESSION['qtyid'][$key] = $qty;
					$status = " add more product in cart";
				}
				else{
					$_SESSION['pdtid'][] = $ids;
					$_SESSION['qtyid'][] = $qty;
					$_SESSION['colorid'][] = $color;
					$_SESSION['sizeid'][] = $size;
					$status = "Product add in cart";
				}
			}
			else{
				$_SESSION['pdtid'][] = $ids;
				$_SESSION['qtyid'][] = $qty;
				$_SESSION['colorid'][] = $color;
				$_SESSION['sizeid'][] = $size;
				$status = "Product add in cart";
			}
		}
		else{
			$_SESSION['pdtid'][] = $ids;
			$_SESSION['qtyid'][] = $qty;
			$_SESSION['colorid'][] = $color;
			$_SESSION['sizeid'][] = $size;
			$status = "Product add in cart";
		}
	}else{
		$status = "Product not available in stock";
	}

	echo $status;

	// echo "<pre>";
	// print_r($pdtid);
	// print_r($qtyid);
	// print_r($colorid);
	// print_r($sizeid);
}
die();
