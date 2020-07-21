<?php 
$index =$_GET['id'];
unset($_SESSION['pdtid'][$index]);
unset($_SESSION['qtyid'][$index]);
unset($_SESSION['colorid'][$index]);
unset($_SESSION['sizeid'][$index]);
Redirect("index.php?f=cart");
?>