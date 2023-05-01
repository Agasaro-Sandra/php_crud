<?php
include 'connection.php';
include 'index.php';

if(isset($_POST{'submit'})){
	
	$first_name= $_POST['firstname'];
	$last_name= $_POST['lastname'];
	$email= $_POST['email'];
	$password= $_POST['password'];
	$password= md5($password);
	$gender= $_POST['gender'];
	
	$sql= "INSERT INTO users(fname, lname, email, password, gender) VALUES ('$first_name', '$last_name', '$email', '$password', '$gender')";
	$result=$conn->query($sql);
	
	if($result == true){
		header("Location: read.php?msg=New record created successfully");
	}else{
        echo"Failed: ".mysqli_error($conn);
    
    }
	
	$conn->close();
}
?>