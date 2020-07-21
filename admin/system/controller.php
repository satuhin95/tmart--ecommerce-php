<?php
if(isset($_GET['i']) && isset($_SESSION['type']) &&($_SESSION['type']==1 || $_SESSION['type']==2)){
	if(file_exists("views/insert/".$_GET['i'].".ins.php")){
		include "views/insert/".$_GET['i'].".ins.php";
	}
	else{
		include "views/view/404.php";
	}

}
else if(isset($_GET['v'])&& isset($_SESSION['type']) &&($_SESSION['type']==1 || $_SESSION['type']==2)){
	if(file_exists("views/view/".$_GET['v'].".vie.php")){
		include "views/view/".$_GET['v'].".vie.php";
	}
	else{
		include "views/view/404.php";
	}

}
else if(isset($_GET['s']) && isset($_SESSION['type']) && $_SESSION['type']==1 ){
	if(file_exists("views/super/".$_GET['s'].".sup.php")){
		include "views/super/".$_GET['s'].".sup.php";
	}
	else{
		include "views/view/404.php";
	}

}			

else{
	include "views/insert/login.ins.php";
}