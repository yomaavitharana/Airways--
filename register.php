
<?php
	include_once 'config.php';
?>	<!DOCTYPE html>
<html>

<head>
<title> Login </title>

        <link rel="stylesheet" href="../css/qwe.css"/>

</head>

<body>
<header>
<center>
        <img src="../images/icon.png" alt="AIRWAYS" height = "200px" width = "200px" ></img>
		<div class="log">
		<h3>Register To Airways</h3>
		</div>
		</center>		
</header>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
			 $sql=  "select * from details";
			 $result = $conn->query($sql);
			
			      if($result->num_rows>0) {
				
			          while ($row=$result->fetch_assoc()){
				               echo"<tr><td>".$row["user_Id"]."</td><td>".$row["uName"]."</td><td>".$row["uAge"]."</td><td>".$row["uContact"]."</td><td>".$row["uAddress"]."</td><td>".$row["uEmail"]."</td><td>".$row["uPassword"]."</td> </tr>";
					
		 }
				
		  }
			else{
			echo "0 results";
				}
				   echo "</table>";
				
				         $conn->close();

		?>
	<form  method="POST" action="registerlog.php">
	<ul>
	<li>
		<input type="text" name="field1"  placeholder="Name">
		<input type="text" name="field2"  placeholder="Age">
		<input type="text" name="field3"  placeholder="Contact Number">
		<input type="text" name="field4"  placeholder="Address">
		<input type="text" name="field5"  placeholder="Email">
		<input type="text" name="field6"  placeholder="Password">
	</li>

		
		<li>
		<input type="submit" value="Sign In"/>
		</li>
	</ul>
	</form>
	<footer>
<a href="Home.html"><img src = "../images/prjectlogo.jpg" alt = "AIRWAYS" height = "50px" width = "50px"></a>
<br>Powered By Adikt<br>
<h4>2020|All Rights Reserved</h4>
</footer>

</body>
</html>	