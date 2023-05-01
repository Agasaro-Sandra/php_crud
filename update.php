<?php
include 'connection.php';
$id=$_GET['id'];

if(isset($_POST{'submit'})){
	
	$first_name= $_POST['firstname'];
	$last_name= $_POST['lastname'];
	$email= $_POST['email'];
	$gender= $_POST['gender'];
	
	$sql= "UPDATE users SET `fname`='$first_name', `lname`='$last_name', `email`='$email', `gender`='$gender' WHERE id=$id";
	$result=$conn->query($sql);
	
	if($result == true){
		header("Location: read.php?msg=Record updated successfully");
	}else{
        echo"Failed: ".mysqli_error($conn);
    
    }
	
	$conn->close();
}
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <h2>Edit Form</h2>
        <?php
        $id=$_GET['id'];
        $sql="SELECT * FROM `users` WHERE id=$id LIMIT 1";
        $result=$conn->query($sql);
        $row=mysqli_fetch_assoc($result)
        ?>
        <form method="POST" action="create.php">
            <fieldset>
                <legend>Personal information:</legend>
                First name:<br>
                <input type="text" name="firstname" value="<?php echo $row['fname']?>">
                <br>
                Last name:<br>
                <input type="text" name="lastname" value="<?php echo $row['lname']?>">
                <br>
                Email:<br>
                <input type="email" name="email" value="<?php echo $row['email']?>">
                <br>
                Password:<br>
                <input type="password" name="password" value="<?php echo $row['password']?>">
                <br>
                Gender:<br>
                <input type="radio" name="gender" value="male" <?php echo ($row['gender']=='male')?"checked":""; ?>>Male<br>
                <input type="radio" name="gender" value="female" <?php echo ($row['gender']=='female')?"checked":""; ?>>Female<br>
                <br>
                <input type="submit" value="update" name="submit">
            </fieldset>
        </form>
    </body>
</html>