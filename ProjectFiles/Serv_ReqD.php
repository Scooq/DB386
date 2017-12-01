<html>
<head>
<title>Delete Service Data</title>
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

if ($connection = @mysql_connect ('localhost', 'DK8444', 'change')){

	
}
else {
	die('<p>Could not connect to MySQL because: <b>' .mysql_error() .
	'</b></p>');
}
if (@mysql_select_db("DK8444_PROJECT1", $connection)){
}
else {
	die('<p>Could not select the QW555_PROJECT1 database because: <b>' .mysql_error().'</b></p>');
}
?>
<table border="3">
<tr bgcolor="A5FFE7">
<font size="12" color="black"><b>Service Request Delete Page</b></font>
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
else if( $count == 0 ) 
{
   ?>
		<font size="7" color="red"><b>The table for that Service Request does not exist!!! Go back and try again...</b></font>
		<button onclick="history.go(-1);">Back </button>
		<?php
		exit;
} 
else
{

if ($r = mysql_query($query))
{
	while ($row = mysql_fetch_array($r)){
	$service_id = $_POST['SERVICE_ID'];
	$slip_id = $_POST['SLIP_ID'];
	$cat_num = $_POST['CATEGORY_NUM'];
	$desc = $_POST['DESCRIPTION'];
	$status = $_POST['STATUS'];
	$est_hours = $_POST['EST_HOURS'];
	$spent_hours = $_POST['SPENT_HOURS'];
	$next_service = $_POST['NEXT_SERVICEDATE'];
}
}

		  if(!$query = mysql_query("DELETE FROM SERVICE_REQUEST WHERE SERVICE_ID ='$service_id'")) {
die(mysql_error());
		  }
?>
	<font size="8" color="blue">DATA HAS BEEN DELETED FROM THE SERVICE REQUEST DATABASE!</font>
		<img style="float:right" src="check.jpg" width="350" height="335" />
	<?php
if ($r = mysql_query($query))
{

	while($row = mysql_fetch_array($r)){
	
}
}
}
?>






</html>