<html>
<head>
<title>Edit Service Data</title>
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
<font size="12" color="black"><b>Service Request Edit Page</b></font>
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
	$slip_id = $_POST['SLIP_ID'];
	$cat_num = $_POST['CATEGORY_NUM'];
	$desc = $_POST['DESCRIPTION'];
	$status = $_POST['STATUS'];
	$est_hours = $_POST['EST_HOURS'];
	$spent_hours = $_POST['SPENT_HOURS'];
	$next_service = $_POST['NEXT_SERVICEDATE'];



if($service_id=='' || $slip_id=='' || $cat_num=='' || $desc=='' || $status=='' || $est_hours=='' || $spent_hours=='' || $next_service=='')
{
	echo "<script>alert('You did not fill in all of the fields!!! Please try again...');history.go(-1);</script>";
}

else
{

if(!$query = mysql_query("UPDATE SERVICE_REQUEST SET SERVICE_ID='$service_id' , SLIP_ID='$slip_id', 
			CATEGORY_NUM='$cat_num', DESCRIPTION='$desc', STATUS='$status', 
			EST_HOURS='$est_hours', SPENT_HOURS='$spent_hours', NEXT_SERVICEDATE='$next_service'
		  WHERE SERVICE_ID = '$service_id'")) {
die(mysql_error());
		  }
?>
	<font size="10" color="blue">DATA HAS BEEN UPDATED FROM THE SERVICE REQUEST DATABASE!</font>
		<img style="float:right" src="check.jpg" width="350" height="335" />
	<?php
if ($r = mysql_query($update))
{
	
	while ($row = mysql_fetch_array($r)){
		?>
		<table border="2">
		<tr>
		<td>SERVICE ID</td>
		<td><?php echo $row['SERVICE_ID']?></td> 
		</tr>
		<tr>
		<td>SLIP ID</td>
		<td><?php echo $row['SLIP_ID']?></td> 
		</tr>
		<tr>
		<td>CATEGORY NUMBER</td>
		<td><?php echo $row['CATEGORY_NUM']?></td> 
		</tr>
		<tr>
		<td>DESCRIPTION</td>
		<td><?php echo $row['DESCRIPTION']?></td> 
		</tr>
		<tr>
		<td>STATUS</td>
		<td><?php echo $row['STATUS']?></td> 
		</tr>
		<tr>
		<td>ESTIMATED HOURS</td>
		<td><?php echo $row['EST_HOURS']?></td> 
		</tr>
		<tr>
		<td>HOURS SPENT</td>
		<td><?php echo $row['SPENT_HOURS']?></td> 
		</tr>
		<tr>
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