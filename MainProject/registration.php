<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('connectDB.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
    
    	$username=stripslashes($_REQUEST['username']);
    	$username=mysqli_real_escape_string($con,$username);
		//removes backslashes
		$email = stripslashes($_REQUEST['email']);
		//escapes special characters in a string
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

        $query = "INSERT into `users` (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='Login.php'>Login</a></div>";
        }
    }else{
?>
		<div class="form">
		<h1>Registration</h1>
		<form name="registration" action="" method="post">
		
		<input type="text" name="username" placeholder="Username" required />
		<input type="email" name="email" placeholder="Email" required />
		<input type="password" name="password" placeholder="Password" required />
		<input type="submit" name="submit" value="Register" />
		</form>
		</div>
		<?php } ?>
</body>
</html>
