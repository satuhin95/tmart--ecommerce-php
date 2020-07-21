<?php 

 $db = new Database();
if ($_SERVER['REQUEST_METHOD']=="POST") {
	$msg="";
	if ($_POST['name']=="") {
		$msg .=" Name Required<br>";
	}
	if ($_POST['email']=="") {
		$msg .=" Email Required<br>";
	}
	if ($_POST['contact']=="") {
		$msg .=" Contact Required<br>";
	}
	if ($_POST['cntid']=="") {
		$msg .=" Country Required<br>";
	}if ($_POST['citid']=="") {
		$msg .=" City Required<br>";
	}
	if ($_POST['address']=="") {
		$msg .=" Address Required<br>";
	}
	if ($_POST['age']=="") {
		$msg .=" Age Required<br>";
	}
	if ($_POST['password']=="") {
		$msg .=" Password Required<br>";
	}
	if ($msg) {
		echo $msg;
	}
	else{
		$arr = array(
			"name"=>$_POST["name"],
			"email"=>$_POST["email"],
			"contact"=>$_POST["contact"],
			"country_id"=>$_POST["cntid"],
			"city_id"=>$_POST["citid"],
			"address"=>$_POST["address"],
			"age"=>$_POST["age"],
			"password"=>$_POST["password"]
		);
		if($db->Insert('customers',$arr)){
			Redirect('view-customers.php');
		}
		
	}
	
}