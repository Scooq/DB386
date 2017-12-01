<html>
<head>
<title>Find Owner Data</title>
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
<font face="impact" size="9" color="black"><b>Owner Query Page</b></font>
<img src="sail.png" width="50" height="50" />
</td>
</tr>
</table>
<table border="3">
<tr>
<td bgcolor="#FFFFFF"><a href="Home.html"><font size="5" color="blue">Here is a link to the Home Page</font></a></td>
<td bgcolor="#FFFFFF"><a href="Marina.html"><font size="5" color="blue">Marina Page</font></a></td>
<td bgcolor="#FFFFFF"><a href="Owner.html"><font size="5" color="blue">Owner Page</font></a></td>
<td bgcolor="#FFFFFF"><a href="Service.html"><font size="5" color="blue">Service Page</font></a></td>
</tr>
</table>
</p>
<?php

$owner_num = $_POST['OWNER_NUM'];

$res = mysql_query("SELECT * FROM OWNER
		  WHERE OWNER_NUM = ('$owner_num')");
$count = mysql_num_rows($res);

 
if($owner_num=='')
{
	echo "<script>alert('You did not fill in all of the fields!!! Please try again...');history.go(-1);</script>";
}
else if( $count == 0 ) {
   
		echo "<script>alert('The table for that Owner does not exist. Please try again.');history.go(-1);</script>";
}
else{
	
$query = "SELECT *
			FROM OWNER
		   WHERE OWNER_NUM = ('$owner_num')";
?>
	<font size="7" color="black"><b>Here is the list of data: </b></font><br>
	<?php
if ($r = mysql_query($query))
{
	
	while($row = mysql_fetch_array($r)){
		?>
		<table border="2">
		<tr bgcolor="#FFFFFF">
		<td>OWNER NUMBER</td>
		<td><?php echo $row['OWNER_NUM']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>LAST NAME</td>
		<td><?php echo $row['LAST_NAME']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>FIRST NAME</td>
		<td><?php echo $row['FIRST_NAME']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>ADDRESS</td>
		<td><?php echo $row['ADDRESS']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>CITY</td>
		<td><?php echo $row['CITY']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>STATE</td>
		<td><?php echo $row['STATE']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
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