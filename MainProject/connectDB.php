<?php

$con=mysqli_connect("localhost","root","","DB386");
//check connection
if(mysqli_connect_errno()){
	echo "Failed to connect to MySql: " . mysqli_connect_error();
}

?>