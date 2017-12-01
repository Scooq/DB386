<html>
<head>
<title>Find Marina Data</title>
</head>
<style>
body {
background-image: url("Best.jpg");
background-position: center;
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
<font face="impact" size="9" color="black"><b>Marina Query Page</b></font>
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

$slip_id = $_POST['SLIP_ID'];

$res = mysql_query("SELECT * FROM MARINA_SLIP
		  WHERE SLIP_ID = '$slip_id'");
$count = mysql_num_rows($res);

 
if($slip_id=='')
{
	echo "<script>alert('You did not fill in all of the fields!!! Please try again...');history.go(-1);</script>";
}
else if( $count == 0 ) {
  echo "<script>alert('The table for that Slip ID does not exist. Please try again.');history.go(-1);</script>";
}
else{

$query = "SELECT * FROM MARINA_SLIP
		  WHERE SLIP_ID = '$slip_id'";

?>

<?php
if ($r = mysql_query($query))
{
	?>
	<font size="7" color="black"><b>Here is the list of data: </b></font><br>
	<?php
	while($row = mysql_fetch_array($r)){
		?>
		<table border="2">
		<tr bgcolor="#FFFFFF">
		<td>SLIP ID</td>
		<td><?php echo $row['SLIP_ID']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>MARINA NUMBER</td>
		<td><?php echo $row['MARINA_NUM']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>SLIP_NUM</td>
		<td><?php echo $row['SLIP_NUM']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>LENGTH</td>
		<td><?php echo $row['LENGTH']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>RENTAL_FEE</td>
		<td><?php echo $row['RENTAL_FEE']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>BOAT_NAME</td>
		<td><?php echo $row['BOAT_NAME']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>BOAT_TYPE</td>
		<td><?php echo $row['BOAT_TYPE']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>OWNER_NUM</td>
		<td><?php echo $row['OWNER_NUM']?></td> 
		</tr>
		</table> 
		<?php
}
}
}
?>






</html>