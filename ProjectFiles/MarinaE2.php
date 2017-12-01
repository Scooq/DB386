<html>
<head>
<title>Edit Marina Data</title>
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
<font face="impact" size="9" color="black"><b>Marina Edit Page</b></font>
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
$marina_num = $_POST['MARINA_NUM'];
$slip_num = $_POST['SLIP_NUM'];
$length = $_POST['LENGTH'];
$rental_fee = $_POST['RENTAL_FEE'];
$boat_name = $_POST['BOAT_NAME'];
$boat_type = $_POST['BOAT_TYPE'];
$owner_num = $_POST['OWNER_NUM'];

if($slip_id=='' || $marina_num=='' || $slip_num=='' || $length=='' || $rental_fee=='' || $boat_name=='' || $boat_type=='' || $owner_num=='')
{
	echo "<script>alert('You did not fill in all of the fields!!! Please try again...');history.go(-1);</script>";
}
else
{
		  if(!$query = mysql_query("UPDATE MARINA_SLIP SET SLIP_ID ='$slip_id', MARINA_NUM = '$marina_num',
		  SLIP_NUM ='$slip_id', LENGTH = '$length',RENTAL_FEE='$rental_fee',
		  BOAT_NAME='$boat_name', BOAT_TYPE='$boat_type', OWNER_NUM = '$owner_num'
		  WHERE SLIP_ID = '$slip_id'")) {
die(mysql_error());
}
?>

	<font size="10" color="blue">DATA HAS BEEN UPDATED FROM THE MARINA DATABASE!</font>
		<img style="float:right" src="check.jpg" width="350" height="335" />
	<?php
if ($r = mysql_query($query))
{
	
	while ($row = mysql_fetch_array($r)){
		
}
}
}
?>





</html>