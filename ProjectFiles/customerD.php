<html>
<head>
<title>Delete Owner Data</title>
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
<font face="impact" size="9" color="black"><b>Owner Delete Page</b></font>
<img src="sail.png" width="50" height="50" />
</td>
</tr>
</table>
<table border="3">
<tr>
<td bgcolor="#FFFFFF"><a href="Home.html"><font size="5" color="blue">Here is a link to the Home Page</font></a></td>
</p>

<?php
$cust_id = $_POST['CUSTOMER_ID'];
$res = mysql_query("SELECT * FROM CUSTOMER
		  WHERE CUSTOMER_ID = ('$cust_id')");
$count = mysql_num_rows($res);

 
if($cust_id=='')
{
	echo "<script>alert('You did not fill in all of the fields!!! Please try again...');history.go(-1);</script>";
}
else if( $count == 0 ) {
    echo "<script>alert('The table for that Owner does not exist. Please try again.');history.go(-1);</script>";
}
else
{
$query = "SELECT * FROM CUSTOMER
		  WHERE CUSTOMER_ID = ('$cust_id')");

if ($r = mysql_query($query))
{
	while ($row = mysql_fetch_array($r)){
		$owner_num = $_POST['OWNER_NUM'];
		$last_name = $_POST['LAST_NAME'];
		$first_name = $_POST['FIRST_NAME'];
		$address = $_POST['ADDRESS'];
		$city = $_POST['CITY'];
		$state = $_POST['STATE'];
		$zip = $_POST['ZIP'];
}
}

		  if(!$query = mysql_query("DELETE FROM CUSTOMER
		  WHERE CUSTOMER_ID = ('$cust_id')"); {
die(mysql_error());
		  }
		  ?>
	<font size="10" color="blue">DATA HAS BEEN DELETED FROM THE OWNER DATABASE!</font>
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