<?php 

$server="localhost";
$username="root";
$password="";
$dbname="system";


$conn = mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit'])){

	if(!empty($_POST['id']) && !empty($_POST['amount']) && !empty($_POST['date'])){

		$id=$_POST['id'];
		$amount=$_POST['amount'];
		$date=$_POST['date'];
		

		$query="insert into payment(student_id,amount,dat) values('$id','$amount','$date')";

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