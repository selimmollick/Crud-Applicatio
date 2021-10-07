<?php
include 'connect.php';


// Get id from URL to delete that user
if (isset($_GET['deleteid'])) {
	$id= $_GET['deleteid'];

	$sql="DELETE FROM crud WHERE id=$id";
	$result=mysqli_query($con,$sql);

	if ($result) {
		// echo "delete sucessfully";
        header('location:display.php');

	}else{
		die(mysqli_error($con));
	}
}
?>

