<?php 
	// delete admin
if ($_SERVER['REQUEST_METHOD']=='GET') {
	$arr =array(
		"id"=>$_GET['id']
	);
	
	if ($db->Delete('colors',$arr)) {
		Redirect('index.php?v=view-color');
	}
}