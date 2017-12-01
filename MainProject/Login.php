<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />


</head>

<body>

<body bgcolor="A5FFE7">
<div class="imgcontainer">
<h1>Welcome to OC Marina</h1>

<img src="css/assets/avatar.jpg" alt="Avatar" class="avatar">
</div>

<?php
	//fetching db connecting php file
	require('connectDB.php');
	session_start();
	
    // If form submitted, insert values into the database.
if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); 
		$username = mysqli_real_escape_string($con,$username); 
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
		$result = mysqli_query($con,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: Index.php"); // Redirect user to index.php
        }else{
			echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='Login.php'>Login</a></div>";
			}
}else{
?>

	<div class="form">
	
	<form action="" method="post" name="login">
	<input type="text" name="username" placeholder="Username" required />
	<input type="password" name="password" placeholder="Password" required />
	<input name="submit" type="submit" value="Login" />
	</form>
	<p>Not registered yet? <a href='registration.php'>Register Here</a></p>

	</div>
	
<?php } ?>

</body>
</html>
