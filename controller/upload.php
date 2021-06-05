<?php
//print_r($GLOBALS);
session_start();
$file=fopen('pictures/images.txt','a') or die("fle open error");

$source=$_FILES['fileToUpload']['tmp_name'];
$target="pictures/".$_FILES['fileToUpload']['name'];
if(move_uploaded_file($source,$target)){
	echo "File uploaded:".$target."<br/>";
	$data=$_SESSION["uname"]."-".$target;
	$a=fwrite($file,"\r\n");
	$b=fwrite($file,$data);
	if($a>0 && $b>0){
		echo "Info added to text file<br/>";
	}
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
}
?>