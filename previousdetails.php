<?php
	include_once 'config.php';
?>

<?php
	$ref=$_POST["refename"];
	$lname=$_POST["pasname"];
	
	
	$nwe = "insert into passenger(reference,name)values('$ref','$lname')";
	
	if(mysqli_query($conn,$nwe)){
		echo"<script>alert('Record successfully inserted!!!')</script>";
	}
	else{
		echo"<script>alert('Error in inserting the record!!')</script>";
	}
	mysqli_close($conn);
?>