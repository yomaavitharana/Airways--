<?php
	include_once 'config12.php';
?>

<?php
	$number = $_POST["Flightnumber"];
	$date = $_POST["Date"];
	$class = $_POST["Class"];
	$start = $_POST["stname"];
	$destination = $_POST["dstname"];
	
	$sql = "insert into modification(Flight_number,day,category,Start,Destination)values('$number','$date','$class','$start','$destination')";
	
	if(mysqli_query($conn,$sql)){
		echo"<script>alert('Record successfully inserted!!!')</script>";
	}
	else{
		echo"<script>alert('Error in inserting the record!!')</script>";
	}
	mysqli_close($conn);
?>

	