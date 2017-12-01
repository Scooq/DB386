<html>
<head>
<title>Insert Owner Data</title>
</head>
<style>
body {
background-image: url("assets/pier.jpg");
}
</style>
<?php

// Address error handling

ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);

//Attempt to Connect

if ($connection = @mysql_connect ('localhost', 'root')){

	
}
else {
	die('<p>Could not connect to MySQL because: <b>' .mysql_error() .
	'</b></p>');
}
if (@mysql_select_db("DB386", $connection)){
}
else {
	die('<p>Could not select the QW555_PROJECT1 database because: <b>' .mysql_error().'</b></p>');
}
?>
<p>
<table bgcolor="#FFFFFF">
<tr>
<font face="impact" size="9" color="black"><b>INSERT DATA:</b></font>

</td>
</tr>
</table>
<?php
$owner_num = $_POST['OWNER_NUM'];
$last_name = $_POST['LAST_NAME'];
$first_name = $_POST['FIRST_NAME'];
$address = $_POST['ADDRESS'];
$city = $_POST['CITY'];
$state = $_POST['STATE'];
$zip = $_POST['ZIP'];
$res = mysql_query("SELECT * FROM OWNER WHERE OWNER_NUM='$owner_num'"); //SQL statement checking users
$count = mysql_num_rows($res);
if($owner_num=='' || $last_name=='' || $first_name=='' || $address=='' || $city=='' || $state=='' || $zip=='')
{
	echo "<script>alert('You did not fill in all of the fields!!! Please try again...');history.go(-1);</script>";
}
else if( $count > 0 ) {
     echo "<script>alert('The table for that Owner already exists. Please try again.');history.go(-1);</script>";
} 


else
{
$query = "INSERT INTO OWNER VALUES('$owner_num','$last_name','$first_name','$address','$city','$state','$zip')";
if(!$query = mysql_query("INSERT INTO OWNER VALUES('$owner_num','$last_name','$first_name','$address','$city','$state','$zip')")) {
die(mysql_error());
}
?>
		<font size="10" color="blue">DATA HAS BEEN INSERTED INTO THE OWNER DATABASE!</font>
		<img style="float:right" src="check.jpg" width="350" height="335" />
		<?php
if ($r = mysql_query($query))
{
	
	while($row = mysql_fetch_array($r)){
		?>
		
		<?php
}
}
}
?>




</html>