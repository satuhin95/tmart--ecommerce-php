<?php
if(isset($_GET['f'])){
	if(file_exists("views/fronts/".$_GET['f'].".php")){
		include "views/fronts/".$_GET['f'].".php";
	}
	else{
		include "views/fronts/404.php";
	}
	
}
else{
	include "views/fronts/home.php";
}