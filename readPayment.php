 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "system";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT student_id FROM payment";
$result = mysqli_query($conn,$sql);
?> 

<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Payment Record</h2></th> 
		</tr> 
			  
			  <th> Student ID </th> 
			  
			 
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr>
		<td><?php echo $rows['student_id']; ?></td> 
		
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>