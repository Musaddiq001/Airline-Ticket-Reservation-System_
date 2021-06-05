<h2>Flight Info</h2>
<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	if(isset($_REQUEST["uname"])){
		$myfile = fopen("flight.txt", "r") or die("Unable to open file!");
		$data=array();
		//loads the array with file data
		while($line=fgets($myfile)) {
			$line=trim($line);
			$ar=explode("-",$line);
			if($_REQUEST["uname"]==$ar[0]){
				$temp["From"]=$ar[0];
				$temp["To"]=$ar[1];
				$temp["Time"]=$ar[2];
				$temp["Price"]=$ar[2];
				
				$data[0]=$temp;
			}
		}
		fclose($myfile);
		//print_r\($data);
		echo "<h4>From:".$data[0]["From"]."</h4>";
		echo "<h4>To:".$data[0]["To"]."</h4>";
		echo "<h4>TIME:".$data[0]["Time"]."</h4>";
		echo "<h4>Price:".$data[0]["Price"]."</h4>";
	}
}
else{
	header("Location:logout.php");
}
?>
Qty:
<input type="number" name="qty"><br/>

<input type="submit" name="sbt" value="purchase" />