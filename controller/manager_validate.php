<?php
$file=fopen('cred.txt','a') or die("fle open error");
$c=0;
$dotPos=strpos($_REQUEST["email"],".");
$atPos=strpos($_REQUEST["email"],"@");
if(strlen($_REQUEST["uname"])==0 || strlen($_REQUEST["pass"])==0 || strlen($_REQUEST["email"])==0){
	echo "All fields are mandatory!";
}
else if($_REQUEST["pass"]!=$_REQUEST["confpass"]){
	echo "Passwords must match";
}
else if($atPos>$dotPos){
	echo "Invalid Email";
}
else{
	$c=$c+fwrite($file,"\r\n");
	$c=$c+fwrite($file,$_REQUEST["uname"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,md5($_REQUEST["pass"]));
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,$_REQUEST["email"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,'Airport Manager');
}
echo "<br/>";
echo $c." charactes appended";
?>