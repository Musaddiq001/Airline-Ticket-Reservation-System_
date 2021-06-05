<h2>User Info</h2>
<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_REQUEST["uname"])){
		$myfile = fopen("cred.txt", "r") or die("Unable to open file!");
		$data=array();
		//loads the array with file data
		while($line=fgets($myfile)) {
			$line=trim($line);
			$ar=explode("-",$line);
			if($_REQUEST["uname"]==$ar[0]){
				$temp["uname"]=$ar[0];
				$temp["pass"]=$ar[1];
				$temp["email"]=$ar[2];
				$data[0]=$temp;
			}
		}
		fclose($myfile);
		//print_r\($data);
		echo "<h1>".$data[0]["uname"]."</h1><hr/>";
		echo "<h4>Email:".$data[0]["email"]."</h4>";
		echo "<h4>Pass:".$data[0]["pass"]."</h4>";
	}
}
else{
	header("Location:logout.php");
}
?>