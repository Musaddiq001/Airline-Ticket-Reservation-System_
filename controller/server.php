<?php
$cred=array();

$file=fopen("cred.txt","r") or die("file error");
while($c=fgets($file)){
	$ar=explode("-",$c,4);
	$cred[$ar[0]]=$ar[1];
	print_r($ar);
}

$flag=0;
session_start();
foreach($cred as $k=>$v) {
	if($_REQUEST["uname"]==$k && md5($_REQUEST["pass"])==$v){
		          echo "Login success";
		          $_SESSION["valid"]="yes";
				  $_SESSION["uname"]=$_REQUEST["uname"];
				  $_SESSION["pass"]=$_REQUEST["pass"];
				  $_SESSION["type"]=$_REQUEST["type"];
				  $flag=1;
			      break;
	}
		 
}

if($flag==0){
	echo "<p style='color:red'>Wrong credentials</p>";
}
if($flag==1){
	if($_REQUEST["type"]=='Admin')
	{
	   header("Location:../view/adminhome.php");
	}	
	else if ($_REQUEST["type"]=='Airport Manager')
	{
	   header("Location:../view/airportmanagerhome.php");
	}
	else if ($_REQUEST["type"]=='Customer')
	{
	   header("Location:../view/customerhome.php");
	}
	else if ($_REQUEST["type"]=='Airport Agent')
	{
	   header("Location:../view/airportagenthome.php");
	}
	
	else
	{
		header("Location:../view/login.php");
	}

}


?>