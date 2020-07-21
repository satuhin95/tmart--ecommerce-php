<?php 
$db = new Database();

// shippings
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=="POST") {
	extract($_POST);
$data =[
	"customer_id"=> $_SESSION['id'],
	"address"=>$address,
	 "name"=>$_POST['name'],
	"contact"=>$phone,
	 "email"=> $_POST['email'],
	 " country "=> $cntid,
	 "payment_methodid"=> $pmid,
	 "transaction_id "=> $tid
];
$db->insert("shippings",$data);
$shippingsId = $db->id;

// Order
$data =[
	"orderdate "=> date("Y-m-d H:i:s"),
	"delivery_date "=>  date("Y-m-d", strtotime(date("Y-m-d")." + 5 days")),
	"payment_method_id"=> $pmid,
	"payment_info "=>$tid,
	"shipping_status"=>1,
	"shippings_id"=>$shippingsId,
	"total_amount"=>$_SESSION['gtotal']
];
$db->insert("orders",$data);
$orderId = $db->id;

}

$pdtid = $_SESSION['pdtid'];
$qtyid = $_SESSION['qtyid'];
$colorid = $_SESSION['colorid'];
$sizeid = $_SESSION['sizeid'];


foreach ($pdtid as $key => $pdt) {
	$where = [
		'product_id'=> $pdtid[$key],
		'size_id'=> $sizeid[$key],
		'color_id'=> $colorid[$key]
	];
	$rel = ["products.id"=>"product_stock.product_id"];
	$result = $db->view("product_stock.id,products.vat,products.discount", "product_stock , products" ,"" , $where, $rel);
	while ($d = $result->fetch_object()) {
		$psid = $d->id;
		$vat = $d->vat;
		$dis = $d->discount;
	}
	$data =[
		"order_id"=>$orderId ,
		"product_stock_id"=>$psid ,
		"quantity "=>$qtyid[$key] ,
		" vat"=>$vat ,
		" discount"=>$dis 
	];
	$db->insert("order_dtails",$data);
}
unset($_SESSION['pdtid']);
unset($_SESSION['qtyid']);
unset($_SESSION['colorid']);
unset($_SESSION['sizeid']);

 Redirect("index.php?f=purchase-history");
