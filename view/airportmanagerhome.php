<h2>Airport Manager Home</h2>
<?php
session_start();
//print_r($GLOBALS);
$file=fopen("../controller/pictures/images.txt","r") or die("file error");
$proPicURL="";
while($c=fgets($file)){
	//echo $c."<br/>";
	$ar=explode("-",$c);
	if($_SESSION["uname"]==$ar[0]){
		$proPicURL=$ar[1];
	}
}
//echo $proPicURL;
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){?>
	<img src="<?php echo $proPicURL;?>" width="300px" height="150px" /><br/><br/>
	Hello: <?php echo $_SESSION["uname"]; ?>
	<br/><br/><br/><br/>
	<a href="../controller/edit.php">Edit Info</a><br/>
	<a href="../controller/picture.php">Change Photo</a><br/>
	<a href="../controller/show_all.php">Show All Users</a><br/>
	<a href="../controller/show_allflights.php">Show All Flights</a><br/>
	<a href="../controller/logout.php">Log Out</a><br/>
	<p>This is a place after login</p>
<?php
}
else{
	header("Location:logout.php");
}
?>