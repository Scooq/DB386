<html>
<head>
<title>Delete Marina Data</title>
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
<font face="impact" size="9" color="black"><b>Marina Delete Page</b></font>
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
		  WHERE SLIP_ID = ('$slip_id')");
$count = mysql_num_rows($res);


if($slip_id=='')
{
	 echo "<script>alert('You did not fill in all of the fields!!! Please try again...');history.go(-1);</script>";
}
else if( $count == 0 ) {
    echo "<script>alert('The table for that Slip ID does not exist. Please try again.');history.go(-1);</script>";
} 
else
{
$query = "SELECT * FROM MARINA_SLIP
		  WHERE SLIP_ID = ('$slip_id')";

?>



<?php
if ($r = mysql_query($query))
{
	while ($row = mysql_fetch_array($r)){
		$slip_id = $row['SLIP_ID'];
		$marina_num = $row['MARINA_NUM'];
		$slip_num = $row['SLIP_NUM'];
		$length = $row['LENGTH'];
		$rental_fee = $row['RENTAL_FEE'];
		$boat_name = $row['BOAT_NAME'];
		$boat_type = $row['BOAT_TYPE'];
		$owner_num = $row['OWNER_NUM'];
}
}

$delete = "DELETE FROM MARINA_SLIP WHERE SLIP_ID ='$slip_id'";
if(!$delete = mysql_query("DELETE FROM MARINA_SLIP WHERE SLIP_ID ='$slip_id'")) {
die(mysql_error());
}
?>
	<font size="10" color="blue">DATA HAS BEEN DELETED FROM THE MARINA DATABASE!</font>
		<img style="float:right" src="check.jpg" width="350" height="335" />
	<?php
if ($r = mysql_query($delete))
{
	
	while($row = mysql_fetch_array($r)){
		
}
}
}
?>
	



</html>