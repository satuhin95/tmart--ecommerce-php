<?php 
$db = new Database();


// $rel = [
// 	"order_id"=>"product_stock_id"
// ];
$result = $db->view("*" ,"order_dtails","","");
while($v = $result->fetch_object()){
	$qty = $v->quantity;
}
echo $qty;
// $rel = [
// 	"product_stock.id"=>"order_dtails.product_stock_id"
// ];
// $sql = $db->view("*" ,"product_stock","","",$rel);
// while($p = $sql->fetch_object()){
// 	$pstock = $p->product_stock;
// }

