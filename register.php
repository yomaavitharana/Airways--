<?php
	include_once 'config.php';
?>	

<?php
	$name = $_POST["field1"];
	$age= $_POST["field2"];
	$contact= $_POST["field3"];
	$address= $_POST["field4"];
	$email= $_POST["field5"];
	$password= $_POST["field6"];


	$sql = "insert into details(userID,uName,uAge,uContact,uAddress,uEmail,uPassword) values('','$name','$age','$contact','$address','$email','$password')";

	if(mysqli_query($conn,$sql)) {
		echo "<script>alert ('Reord inserted successfully!')</script>";
		header("Location:login.html");
	}
		else {
			echo "<script>alert ('Error in inserting the records')</script>";
		}

	mysqli_close($conn);

?>  