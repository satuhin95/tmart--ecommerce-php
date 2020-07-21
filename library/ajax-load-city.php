<?php 
include 'db.php';

if ($_SERVER['REQUEST_METHOD']=='POST') {
	$db = new Database();
	$data = array(
		'country_id'=> $_POST['cntid']
	);
	$status = $db->view("*","cities","",$data);
	if ($status->num_rows > 0) {
		while ($data  = $status->fetch_assoc()) {
			$arr[]=$data;	
		}
	}
	header("Content-type:application/json");
	echo json_encode($arr);	
	
}
die();