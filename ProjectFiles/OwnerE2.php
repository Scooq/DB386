<html>
<head>
<title>Edit Owner Data</title>
</head>
<style>
body {
background-image: url("water.png");
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
<td bgcolor="A5FFE7"><img src="anchor.png" width="50" height="50" />
<font face="impact" size="9" color="black"><b>Owner Edit Page</b></font>
<img src="sail.png" width="50" height="50" />
</td>
</tr>
</table>
</p>
<?php
		$owner_num = $_POST['OWNER_NUM'];
		$last_name = $_POST['LAST_NAME'];
		$first_name = $_POST['FIRST_NAME'];
		$address = $_POST['ADDRESS'];
		$city = $_POST['CITY'];
		$state = $_POST['STATE'];
		$zip = $_POST['ZIP'];
		
if($owner_num=='' || $last_name=='' || $first_name=='' || $address=='' || $city=='' || $state=='' || $zip=='')
{
	echo "<script>alert('You did not fill in all of the fields!!! Please try again...');history.go(-1);</script>";
}
else
{


		  if(!$query = mysql_query("UPDATE OWNER SET OWNER_NUM='$owner_num', LAST_NAME='$last_name', FIRST_NAME='$first_name',
		  ADDRESS='$address', CITY='$city', STATE='$state', ZIP='$zip'
		  WHERE OWNER_NUM ='$owner_num'")) {
die(mysql_error());
}
?>
	<font size="10" color="blue">DATA HAS BEEN UPDATED FROM THE OWNER DATABASE!</font>
		<img style="float:right" src="check.jpg" width="350" height="335" />
	<?php
if ($r = mysql_query($query))
{
	
	while($row = mysql_fetch_array($r)){
		?>
		<table border="2">
		<tr>
		<td>OWNER_NUM</td>
		<td><?php echo $row['OWNER_NUM']?></td> 
		</tr>
		<tr>
		<td>LAST_NAME</td>
		<td><?php echo $row['LAST_NAME']?></td> 
		</tr>
		<tr>
		<td>FIRST_NAME</td>
		<td><?php echo $row['FIRST_NAME']?></td> 
		</tr>
		<tr>
		<td>ADDRESS</td>
		<td><?php echo $row['ADDRESS']?></td> 
		</tr>
		<tr>
		<td>CITY</td>
		<td><?php echo $row['CITY']?></td> 
		</tr>
		<tr>
		<td>STATE</td>
		<td><?php echo $row['STATE']?></td> 
		</tr>
		<tr>
		<td>ZIP</td>
		<td><?php echo $row['ZIP']?></td> 
		</tr>
		</table> 
		<?php
}
}
}

?>




</html>