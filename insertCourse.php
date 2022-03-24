<?php 

$server="localhost";
$username="root";
$password="";
$dbname="system";


$conn = mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit'])){

	if(!empty($_POST['title']) && !empty($_POST['department']) && !empty($_POST['syllabus'])){

		$title=$_POST['title'];
		$department=$_POST['department'];
		$syllabus=$_POST['syllabus'];
		

		$query="insert into course(title,department,syllabus) values('$title','$department','$syllabus')";

		$run=mysqli_query($conn,$query) or die(mysqli_error($conn));
		if($run){
			echo "Data submitted";
		}

	}
else{
	echo "all fields required";
}
	

		

}





 ?>