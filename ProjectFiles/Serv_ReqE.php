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
	$res = mysql_query("SELECT * FROM SERVICE_REQUEST WHERE SERVICE_ID='$service_id'");
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
	while ($row = mysql_fetch_array($r)){
	$service_id = $row['SERVICE_ID'];
	$slip_id = $row['SLIP_ID'];
	$cat_num = $row['CATEGORY_NUM'];
	$desc = $row['DESCRIPTION'];
	$status = $row['STATUS'];
	$est_hours = $row['EST_HOURS'];
	$spent_hours = $row['SPENT_HOURS'];
	$next_service = $row['NEXT_SERVICEDATE'];
}
}
?>


<form action = "Serv_ReqE2.php" method = "post">
<table border="3" bgcolor="#FFFFFF">
<tr>
<td>SERVICE ID:</td>
<td> <input name="SERVICE_ID" type="text" size=”4” value = "<?php print $service_id; ?>" ></td>
</tr>
<tr>
<td>SLIP ID:</td><td><input name = "SLIP_ID" type="text" value = "<?php print $slip_id; ?>"></td>
</tr>
<tr>
<td>CATEGORY NUMBER:</td><td><input name = "CATEGORY_NUM" type="text" value = "<?php print $cat_num; ?>"></td>
</tr>
<tr>
<td>DESCRIPTION:</td><td><input name = "DESCRIPTION" type="text" value = "<?php print $desc; ?>"></td>
</tr>
<tr>
<td>STATUS:</td><td><input name = "STATUS" type="text" value = "<?php print $status; ?>"></td>
</tr>
<tr>
<td>ESTIMATED HOURS:</td><td><input name = "EST_HOURS" type="text" value = "<?php print $est_hours; ?>"></td>
</tr>
<tr>
<td>SPENT HOURS:</td><td><input name = "SPENT_HOURS" type="text" value = "<?php print $spent_hours; ?>"></td>
</tr>
<tr>
<td>NEXT SERVICE DATE:</td><td><input name = "NEXT_SERVICEDATE" type="text" value = "<?php print $next_service; ?>"></td>
</tr>
</table>
<td><input type="submit" value="UPDATE DATA" onclick="return confirm('Are you sure you want to EDIT data?')"> </td>
</form>

<?php
}
?>



</html>