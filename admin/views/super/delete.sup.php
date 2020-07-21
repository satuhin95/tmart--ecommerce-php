<?php 
	// delete admin
if ($_SERVER['REQUEST_METHOD']=='GET') {
	$arr =array(
		"id"=>$_GET['id']
	);
	
	if ($db->Delete('admins',$arr)) {
		Redirect('index.php?s=view-admin');
	}
}









