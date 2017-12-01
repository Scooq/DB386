<html>
<head>
<title>Find Service Data</title>
</head>
<style>
body {
background-image: url("service1.jpg");
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
<table border="3">
<tr bgcolor="A5FFE7">
<font size="12" color="black"><b>Service Request Query Page</b></font>
</tr>
<tr>
<td bgcolor="#FFFFFF"><a href="Home.html"><font size="5" color="blue">Here is a link to the Home Page</font></a></td>
<td bgcolor="#FFFFFF"><a href="Marina.html"><font size="5" color="blue">Marina Page</font></a></td>
<td bgcolor="#FFFFFF"><a href="Owner.html"><font size="5" color="blue">Owner Page</font></a></td>
<td bgcolor="#FFFFFF"><a href="Service.html"><font size="5" color="blue">Service Page</font></a></td>
</tr>
</table>
<br>
<?php

$service_id = $_POST['SERVICE_ID'];

$res = mysql_query("SELECT * FROM SERVICE_REQUEST
		  WHERE SERVICE_ID = ('$service_id')");
$count = mysql_num_rows($res);

 
if($service_id=='')
{

	echo "<script>alert('You did not fill in all of the fields!!! Please try again...');history.go(-1);</script>";
}
else if( $count == 0 ) {
    echo "<script>alert('The table for that Service ID does not exist. Please try again.');history.go(-1);</script>";
}
else{
	
$query = "SELECT * FROM SERVICE_REQUEST
		 WHERE SERVICE_ID = ('$service_id')";


if ($r = mysql_query($query))
{
		?>
		<font size="7" color="black"><b><u>Here is a list of the data:<u></b></font>
		<?php
	while($row = mysql_fetch_array($r)){
		?>
		<table border="2">
		<tr  bgcolor="FFFFFF">
		<td>SERVICE ID</td>
		<td><?php echo $row['SERVICE_ID']?></td> 
		</tr>
		<tr  bgcolor="FFFFFF">
		<td>SLIP ID</td>
		<td><?php echo $row['SLIP_ID']?></td> 
		</tr>
		<tr  bgcolor="FFFFFF">
		<td>CATEGORY NUMBER</td>
		<td><?php echo $row['CATEGORY_NUM']?></td> 
		</tr>
		<tr  bgcolor="FFFFFF">
		<td>DESCRIPTION</td>
		<td><?php echo $row['DESCRIPTION']?></td> 
		</tr>
		<tr  bgcolor="FFFFFF">
		<td>STATUS</td>
		<td><?php echo $row['STATUS']?></td> 
		</tr>
		<tr  bgcolor="FFFFFF">
		<td>ESTIMATED HOURS</td>
		<td><?php echo $row['EST_HOURS']?></td> 
		</tr>
		<tr  bgcolor="FFFFFF">
		<td>HOURS SPENT</td>
		<td><?php echo $row['SPENT_HOURS']?></td> 
		</tr>
		<tr  bgcolor="FFFFFF">
		<td>NEXT SERVICE DATE</td>
		<td><?php echo $row['NEXT_SERVICEDATE']?></td> 
		</tr>
		</table> 
		<?php
}
}
}
?>







</html>