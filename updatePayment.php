<!DOCTYPE html>
<html>
<head>
	<title>Payment update</title>
	<style>

		input{
			width:40%;
			height: 5%;
			border:1px;
		    border-radius:5px;
		    padding: 8px 15px 8px 15px;
		     margin:5px 50px 5px 5px;
		     box-shadow: 1px 1px 1px 1px;

		}
	</style>
</head>
<body>
	<center>
		<h1>Upate PAyment Data</h1>
		<form action="" method="POST" ><br><br>
		<input type="text" name="id" placeholder="Enter ID "> <br><br> 
		<input type="text" name="student_id" placeholder= "Enter Student ID"><br><br>
		<input type="text" name="amount" placeholder="Enter Amount "> <br><br>
		<input type="text" name="date" placeholder="Enter Date "><br><br>
		<input type="submit" name="update" value="Update">
	


		</form>
	</center>

</body>
</html>

<?php 

$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,'system');

if(isset($_POST['update'])){
$id= $_POST['id'];
$query="UPDATE payment SET student_id='$_POST[student_id]',amount='$_POST[amount]',date='$_POST[date]' where payment_id='$_POST[id]'";
$run=mysqli_query($conn,$query);


if($run){
	echo "payment data updated";
}

}


 ?>