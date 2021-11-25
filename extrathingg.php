<!DOCTYPE html>
<html>
<head>
<title>Modify Booking</title>
<link rel = "stylesheet" href = "../css/stylemyprjct.css">
<script src = "../js/myprject.js"></script>
</head>
<body>
<hr>
<header>
<div class = "back">
<table width = "100%">
<tr>
<th>
<div class = "topnav">
<img src = "../images/prjectlogo.jpg" alt ="AIRWAYS" height = "200px" width = "200px" align = "left">
<br><br><br><br><br><br><br><br>
<a href = "#">Home</a>
<a href = "#">Book</a>
<a href = "#">Manage</a>
<a href = "#">Loyality</a>
<a href = "#">Destination</a>
<a href = "#">Help</a>
<a href = "#">Contact</a>
<form align = "right">
<label for = "language">Language :</label>
<select name = "language" id = "language">
<option value = "Arabic">Arabic</option>
<option value = "Bengali">Bengali</option>
<option value = "Hindi">Hindi</option>
</select>
</form>
<input class = "srch" style = "float:right; margin-right:10px; margin-bottom:2px; padding:7px 6px;" type = "search" placeholder = "Search...">
</div>
</th>
</tr>
</table>
</div>

<fieldset>
<legend><h2>My Booking</h2></legend>
<form method = "POST" action = "previousdetails.php">
<input type = "text" id = "refename" name = "refename" style = "width : 300px;" placeholder = "Booking reference" required><br><br>
<input type = "text" id = "pasname" name = "pasname" style = "width : 300px;" placeholder = "Last name of the passenger" required><br><br>
<input type = "submit" id = "sbtn" name = "sbtn" value = "Find my booking" class = "stylesubmit">
</form>
</fieldset>
<br><br><br>
<hr>
<h2>If you want to modify your previous booking details,fill in the form given below.</h2><br>
<div class = "divcls">
<form method = "POST" action = "submitdetails.php">
<label>Flight number :</label><br><br>
<input type = "text" id = "Flightnumber" name = "Flightnumber" style = "width : 500px;" placeholder = "Enter your flight number " required>

<br><br><br>
<label>Date :</label><br><br>
<input type = "date" id = "Date" name = "Date" required><br><br><br>
<label>Class :</label><br><br>
<input type = "text" id = "Class" name = "Class" style = "width : 500px;" placeholder = "Enter your flight class " required>
<br><br><br>
<label>Start :</label><br><br>
<input type = "text" id = "stname" name = "stname" style = "width : 500px;" placeholder = "Enter the place of starting your journey" required><br><br><br>
<label>Destination :</label><br><br>
<input type = "text" id = "dstname" name = "dstname" style = "width : 500px;" placeholder = "Enter your destination" required><br><br><br>
<label>Accept if any additional charges</label>
<input type = "checkbox" id = "adcharges" name = "adcharges" required onclick = "enableSubbtn()"><br><br><br>
<input type = "submit" id = "bttn1" name = "bttn1" value = "Submit" class = "stylesubmit" disabled>
<br><br><br>
<a href="showdetail.php">Show my previous booking modifications</a>
<br><br>
</form>
</div>

<?php
	
	if(isset($_POST['sbtn'])){
	$ref=$_POST["refename"];
	$lname=$_POST["pasname"];
	
	include_once 'config.php';
	
	
	$nwe = mysqli_query($conn,"insert into passenger(reference,name)values('$ref','$lname')");
	echo"added successfully";
	}
	
	if(isset($_POST['bttn1'])){
	$number = $_POST["Flightnumber"];
	$date = $_POST["Date"];
	$class = $_POST["Class"];
	$start = $_POST["stname"];
	$destination = $_POST["dstname"];
	
	
	$sql = mysqli_query($conn,"insert into modification(Flight_number,day,category,Start,Destination)values('$number','$date','$class','$start','$destination')");
	echo"added";
	}
?>

<footer>
<img src = "../images/prjectlogo.jpg" alt = "AIRWAYS" height = "50px" width = "50px">
<br>Powered By Adikt<br>
<h4>2020|All Rights Reserved</h4>
</footer>
</body>
</html>
