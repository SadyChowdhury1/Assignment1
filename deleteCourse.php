<!DOCTYPE html>
<html>
<head>
	<title>Delete Course</title>

	<style >

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
		<h1>Delete Course</h1>
		<form action="" method="POST">
		<input type="text" name="id" placeholder="Enter ID"><br><br>
		<input type="submit" name="delete" value="Delete">


		</form>

	</center>

</body>
</html>

<?php 

$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,'system');

if(isset($_POST['delete'])){

	$id=$_POST['id'];
	$query="DELETE from course  where id='$id'";
	$query_run=mysqli_query($conn,$query);

	if($query_run){
		echo "Course deleted";
	}
}






 ?>