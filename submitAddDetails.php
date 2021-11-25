<?php
	include_once 'configIT20109530.php';
?>	

<?php
	$name = $_POST["field1"];
	$resi = $_POST["field2"];
	$travFrom = $_POST["field3"];
	$travTo = $_POST["field4"];
	$transistCoun = $_POST["field5"];

	$sql = "insert into details(user_Id,passport_holderOf,residence,traveling_from,traveling_to,transits_country)values('','$name','$resi','$travFrom','$travTo','$transistCoun')";

	if(mysqli_query($conn,$sql)) {
		echo "<script>alert ('Reord inserted successfully!')</script>";
		header("Location:visa.html");
	}
		else {
			echo "<script>alert ('Error in inserting the records')</script>";
		}

	mysqli_close($conn);

?>  