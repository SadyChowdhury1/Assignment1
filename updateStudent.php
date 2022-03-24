<!DOCTYPE html>
<html>
<head>
	<title>student update</title>
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
		<h1>Upate Student Data</h1>
		<form action="" method="POST" ><br><br>
		<input type="text" name="id" placeholder="Enter ID "> <br><br> 
		<input type="text" name="department" placeholder= "Enter Department"><br><br>
		<input type="text" name="name" placeholder="Enter Name "> <br><br>
		<input type="text" name="nid" placeholder="Enter NID "> <br><br>
		<input type="text" name="address" placeholder="Enter Address "><br><br>
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
$query="UPDATE student SET department='$_POST[department]',name='$_POST[name]',nid='$_POST[nid]',address='$_POST[address]' where id='$_POST[id]'";
$run=mysqli_query($conn,$query);


if($run){
	echo "student data updated";
}

}


 ?>