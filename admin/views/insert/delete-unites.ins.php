<?php 
	// delete admin
if ($_SERVER['REQUEST_METHOD']=='GET') {
	$arr =array(
		"id"=>$_GET['id']
	);
	
	if ($db->Delete('unites',$arr)) {
		Redirect('index.php?v=view-unites');
	}
}










