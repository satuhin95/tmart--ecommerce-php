<?php 
include "../library/db.php";

if ($_SERVER['REQUEST_METHOD']=='POST') {
	$m = new Database();
	$data = array(
		'categorie_id'=> $_POST['catid']
		
	);
	$status = $m->view("*","subcategories","",$data);
	if ($status->num_rows > 0) {
		while ($data  = $status->fetch_assoc()) {
			$arr[]=$data;	
		}
	}
	header("Content-type:application/json");
	echo json_encode($arr);	
	
}
die();