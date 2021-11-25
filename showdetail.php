<?php
	include_once 'config.php';
?>

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
<br><br><br>

<center>
<div style="border-style: groove; border-color: orange">
<table border="1" width="100%">
<tr>
<th>Booking reference</th>
<th>Last name of the passenger</th>
</tr>
<?php
$pasname = "select * from passenger";
$reslt = $conn->query($pasname);
if($reslt->num_rows>0){
	while($rows=$reslt->fetch_assoc()){
		echo"<tr><td>".$rows["reference"]."</td><td>".$rows["name"]."</td></tr>";
	}
}
else{
	echo"no results";
}
echo"</table>";
?>

</div>
</center>
<br><br><br>

<center>
<div style="border-style: groove; border-color: orange">
<table border="1" width="100%">
<tr>
<th>Flight number</th>
<th>Date</th>
<th>Class</th>
<th>Start</th>
<th>Destination</th>
</tr>
<?php
$sql = "select * from modification";
$catch = $conn->query($sql);
if($catch->num_rows>0){
	while($row=$catch->fetch_assoc()){
		echo"<tr><td>".$row["Flight_number"]."</td><td>".$row["day"]."</td><td>".$row["category"]."</td><td>".$row["Start"]."</td><td>".$row["Destination"]."</td></tr>";
	}
}
else{
	echo"no results";
}
echo"</table>";
$conn->close();
?>

</div>
</center>
<br><br><br>

<footer>
<img src = "../images/prjectlogo.jpg" alt = "AIRWAYS" height = "50px" width = "50px">
<br>Powered By Adikt<br>
<h4>2020|All Rights Reserved</h4>
</footer>
</body>
</html>
