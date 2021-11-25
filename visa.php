<?php
	include_once 'configIT20109530.php';
?>	

<!DOCTYPE html>
<html>
<head>
	
	<title> Visa And Passport </title>
	<link rel="stylesheet" href="../css/visastyle.css"/>
	
	</head>
	

	<body>

	
	<!--this is the header section of the web page-->
	<header>
	
	<img src="../images/icon.png" alt="AIRWAYS" height = "200px" width = "200px" ></img>
		<div>
		 <ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Book</a></li>
			<li><a href="#">Manage</a></li>
			<li><a href="#">Loyalaty</a></li>
			<li><a href="#">Destinations</a></li>
			<li><a href="#">Help</a></li>
			<li><a href="#">Contact</a></li>
		 </ul>
		</div> 
	
	
		
	  </header>
	  	
		
	  
		 <nav>
			 <ul>
				<li><a href="#">Manage</a></li>
				<li><a href="#">Before You Fly</a></li>
				<li><a href="#">Visa And Passport</a></li>

			 </ul>
		</nav> 
	<center>
	<h3><big>BEFORE YOU FLY</big></h3>	<br>

	<h1><big>Visa And Passport</big></h1><br>

	<p>Remember, It's your responsibility to carry the proper <br> 
	travel documents. Check the entry requirements for <br>
	your upcoming trip before you travel.</p><br>

	<h3>E N T R Y R E Q U I R E M E N T S</h3><br>
	<h2>Check your Visa and Passport Requirements</h2><br>
	
	<center>
	<div class="productData tbl" style="border-style: groove; border-color: DarkYellow">
		<table border="1" width="100%">
		<tr>
			<th class="coll">user_Id</th>
			<th class="coll">passport_holderOf</th>
			<th class="coll">residence</th>
			<th class="coll">traveling_from</th>
			<th class="coll">traveling_to</th>
			<th class="coll">transits_country</th>
		</tr>
		
		<?php
			$sql=  "select * from details";
			$result = $conn->query($sql);
			
			if($result->num_rows>0) {
				
				while ($row=$result->fetch_assoc()){
					echo"<tr><td>".$row["user_Id"]."</td><td>".$row["passport_holderOf"]."</td><td>".$row["residence"]."</td><td>".$row["traveling_from"]."</td><td>".$row["traveling_to"]."</td><td>".$row["transits_country"]."</td></tr
					>";
				}
				
			}
				else{
					echo "0 results";
				}
				echo "</table>";
				
				$conn->close();

		?>
	<br><br><br><br><br><br>

	
	<!-- This is the submit button codes-->
	
		<form class="form-style-9" method="POST" action="submitAddDetails.php">
		<table>
		<tr>
		<th> Passport Holder Of : </th>
		<td><input type="text" name="passport holder of"></td>
		</tr>
		
		<tr>
		<th> Residence : </th>
		<td><input type="text" name="residence"></td>
		</tr>
		
		<tr>
		<th> Traveling From : </th>
		<td><input type="text" name="traveling from"></td>
		</tr>
		
		<tr>
		<th> Traveling To : </th>
		<td><input type="text" name="traveling to"></td>
		</tr>
		
		<tr>
		<th> Transits Country : </th>
		<td><input type="text" name="transits country"></td>
		</tr>
		
		<a href="Thank You!">
		<tr>
		<td colspan ="2"><input type ="submit" value ="Confirm"/></td>
		</tr> </a>
		
		
		</table>
		</form> 
		


	<br><br><br><br>
	
	<h2>Visa And Passport FAQs</h2>	
	<br><br>
<h1><big>Frequently Asked Questions</big></h1><br>

		  <br><br><br><br>
	  
	  <div class="select">
	     <select name="format" id= "format">
		    <option selected disabled>Can I still travel if my passport was expired?</option>
			<option value="London">Yes. You can. But you have to contact our support system Manager and give the details.</option>
		
			</select>
			</div>
			
			<div class="select">
				<select name="format" id= "format">
					<option selected disabled>How can I apply visa for Australia?</option>
					<option value="London">Yes. You may. But you have to contact our support system Manager and give the details.</option>
					
				</select>
			</div>
			
			 
	  <div class="select">
	     <select name="format" id= "format">
		    <option selected disabled>Do I need a Visa to travel Singapore?</option>
			<option value="London">No. You do not need a Visa to travel Singapore.</option>

			</select>
			</div>
			<br><br><br><br>
			<div class="submit">
				<button class="button button1">FAQs about  Visa And Passport</button>
	        </div>
	  
			
			 
	  
	 </body>
	 <footer>
<img src="../images/icon.png" alt="AIRWAYS" height = "50px" width = "50px" ></img>
  <p>Powered By Adikt<br>
  
 </footer> 
 </html>