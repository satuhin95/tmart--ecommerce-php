<?php
if(isset($_GET['f'])){
	if ($_GET['f']=='home') {
		echo "welcome in our website";
	}
	else if ($_GET['f']=='about') {
		echo "About Us";
	}
	else if ($_GET['f']=='blog') {
		echo "blog ";
	}
	else if ($_GET['f']=='portfolio-card-box-2') {
		echo "portfolio ";
	}
	else if ($_GET['f']=='blog-details') {
		echo "blog-details ";
	}
	else if ($_GET['f']=='shop') {
		echo "shop ";
	}
	else if ($_GET['f']=='customer-review') {
		echo "customer-review ";
	}
	else if ($_GET['f']=='cart') {
		echo "cart ";
	}
	else if ($_GET['f']=='wishlist') {
		echo "wishlist ";
	}
	else if ($_GET['f']=='checkout') {
		echo "checkout";
	}
	else if ($_GET['f']=='single-portfolio') {
		echo "single-portfolio ";
	}
	else if ($_GET['f']=='login-register') {
		echo "login-register ";
	}
	else if ($_GET['f']=='team') {
		echo "team";
	}
	else if ($_GET['f']=='contact') {
		echo "contact";
	}
}

else{
	echo "Basic template";
}
