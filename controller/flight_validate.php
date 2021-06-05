<?php
session_start();
$file=fopen('flight.txt','a') or die("fle open error");
$c=0;
if(strlen($_REQUEST["fid"])==0 || strlen($_REQUEST["from"])==0 || strlen($_REQUEST["to"])==0 || strlen($_REQUEST["time"])==0 || strlen($_REQUEST["price"])==0){
	echo "All fields are mandatory!";
}

else{
	$c=$c+fwrite($file,"\r\n");
	$c=$c+fwrite($file,$_REQUEST["fid"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,$_REQUEST["from"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,$_REQUEST["to"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,$_REQUEST["time"]);
	$c=$c+fwrite($file,"-");
	$c=$c+fwrite($file,$_REQUEST["price"]);
}
echo "<br/>";
echo $c." charactes appended";

	if($_SESSION["type"]=='Admin')
	{
	   header("Location:../view/adminhome.php");
	}	
	else if ($_SESSION["type"]=='Airport Manager')
	{
	   header("Location:../view/airportmanagerhome.php");
	}
	else if ($_SESSION["type"]=='Customer')
	{
	   header("Location:../view/customerhome.php");
	}
	else if ($_SESSION["type"]=='Airport Agent')
	{
	   header("Location:../view/airportagenthome.php");
	}
	
	else
	{
		header("Location:../view/login.php");
	}
?>
