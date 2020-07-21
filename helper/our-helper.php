<?php
function Redirect($url){
	echo "<script>self.location='{$url}';</script>";
	die();
}
function checkExt($file){
 $ext ="";
 if ($_FILES[$file]['name']) {
   $extension =pathinfo($_FILES[$file]['name']);
   $ext = $extension['extension'];
   $ext = strtolower($extension['extension']);
   if ($ext !='jpg' && $ext !='png' && $ext !='gif' && $ext !='jpeg' ) {
    $ext = "";
  }
}
return $ext;
}
function priceCal($p, $v, $d){
  $p = $p - ($p*$d)/100;
  return round($p + ($p*$v)/100);
}
function loadUrl(){
  $url = $_SERVER['HTTP_REFERER'];
  $url = explode("/", $url);
  array_pop($url);
  $url = implode("/", $url);
  return $url;
}

