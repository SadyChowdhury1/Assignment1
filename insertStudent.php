<?php 

$server="localhost";
$username="root";
$password="";
$dbname="system";


$conn = mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit'])){

	if(!empty($_POST['name']) && !empty($_POST['department']) && !empty($_POST['nid']) && !empty($_POST['birth']) && !empty($_POST['address'])){

		$name=$_POST['name'];
		$department=$_POST['department'];
		$nid=$_POST['nid'];
		$birth=$_POST['birth'];
		$address=$_POST['address'];

		$query="insert into student(name,department,nid,birth,address) values('$name','$department','$nid','$birth','$address')";

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