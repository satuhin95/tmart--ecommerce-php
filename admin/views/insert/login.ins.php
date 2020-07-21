<?php 
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$msg="";
	if (empty($_POST['email'])) {
		$msg .="Email is empty<br>";	
	}
	if (strlen(trim($_POST['password']) < 0)) {
		$msg .="Email is empty<br>";
	}
	if ($msg) {
		echo $msg;
	}
	else{
		$arr=array(
			'email'=>$_POST['email'],
			'password'=>md5($_POST['password'])

		);
		$result = $db->view("*","admins","",$arr);
		if ($result->num_rows > 0) {
			while ($d = $result->fetch_object()) {
				$_SESSION['id'] = $d->id;
				$_SESSION['name'] = $d->name;
				$_SESSION['type'] = $d->type;
				Redirect('index.php?v=view');	
			}	
		}
		else{
			echo "Invalid email or password";
		}
		
	}
}
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
	<div class="container">
		<section id="content">
			<form action="" method="post">
				<h1>Admin Login</h1>
				<div>
					<input type="text" placeholder="Email"  name="email"/>
				</div>
				<div>
					<input type="password" placeholder="Password"  name="password"/>
				</div>
				<div>
					<input type="submit" value="Log in" />
				</div>
			</form>
			<div class="button">
				<a href="#">E-commerce</a>
			</div>
		</section>
	</div>
</body>
</html>
