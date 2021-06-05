<h2>List of Flights</h2>
<?php
session_start();
if(isset($_SESSION["valid"]) && $_SESSION["valid"]=="yes"){
	$myfile = fopen("flight.txt", "r") or die("Unable to open file!");
	$data=array();
	//loads the array with file data
	while($line=fgets($myfile)) {
		$line=trim($line);
		$ar=explode("-",$line);
		$temp["uname"]=$ar[0];
		$data[]=$temp;
	}
	fclose($myfile);
	//print_r($data);
	foreach($data as $v){?>
		<a href="flights.php?uname=<?php echo $v["uname"];?>"><?php echo $v["uname"];?></a><br/>
<?php
	}
}
else{
	header("Location:logout.php");
}
?>