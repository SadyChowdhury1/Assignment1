<!DOCTYPE html>
<html>
<head>
	<title>Course update</title>
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
		<h1>Upate Course Data</h1>
		<form action="" method="POST" ><br><br>
		<input type="text" name="id" placeholder="Enter ID "> <br><br> 
		<input type="text" name="department" placeholder= "Enter Department"><br><br>
		<input type="text" name="title" placeholder="Enter title "> <br><br>
		<input type="text" name="syllabus" placeholder="Enter Syllabus "><br><br>
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
$query="UPDATE course SET department='$_POST[department]',title='$_POST[title]',syllabus='$_POST[syllabus]' where id='$_POST[id]'";
$run=mysqli_query($conn,$query);


if($run){
	echo "course data updated";
}

}


 ?>