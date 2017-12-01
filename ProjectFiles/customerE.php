<html>
<head>
<title>Edit Customer Data</title>
</head>
<style>
body {
background-image: url("Car.jpg");
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
<font face="impact" size="9" color="black"><b>EDIT</b></font>
</td>
</tr>
</table>
<table border="3">
<tr>
<td bgcolor="#FFFFFF"><a href="Home.html"><font size="5" color="blue">Here is a link to the Home Page</font></a></td>
<td bgcolor="#FFFFFF"><a href="Marina.html"><font size="5" color="blue">Maintenance</font></a></td>
<td bgcolor="#FFFFFF"><a href="Owner.html"><font size="5" color="blue">Report</font></a></td>
</tr>
</table>
</p>

<?php

$cust_id = $_POST['CUSTOMER_ID'];
$res = mysql_query("SELECT * FROM CUSTOMER WHERE CUSTOMER_ID = ('$cust_id')");
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
$query = "SELECT * FROM CUSTOMER WHERE CUSTOMER_ID = ('$cust_id')";

if ($r = mysql_query($query))
{

	while ($row = mysql_fetch_array($r)){
		$cust_id = $row['CUSTOMER_NUM'];
		$last_name = $row['LAST_NAME'];
		$first_name = $row['FIRST_NAME'];
		$address = $row['ADDRESS'];
		$city = $row['CITY'];
		$state = $row['STATE'];
		$zip = $row['ZIP'];
		$card_num = $_POST['CARD_NUM'];
		$rental_date = $_POST['RENTAL_DATE'];
		$return_date = $_POST['RETURN_DATE'];
		$rental_fee = $_POST['RENTAL_FEE'];
		$fee_paid = $_POST['FEE_PAID'];
		$birth_date = $_POST['BIRTH_DATE'];
}

}

?>
<font size="10" color="blue">Enter the following data to be UPDATED:</font><br>
<form action = "OwnerE2.php" method = "post">
<table border="3">
<tr>
<td bgcolor="#FFFFFF">CUSTOMER ID: </td><td><input name="OWNER_NUM" type="text" size=”4” value = "<?php print $owner_num; ?>"></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">LAST NAME: </td><td><input name = "LAST_NAME" type="text" value = "<?php print $last_name; ?>"></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">FIRST NAME: </td><td><input name ="FIRST_NAME" type="text" value = "<?php print $first_name; ?>"></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">ADDRESS: </td><td><input name ="ADDRESS" type="text" value = "<?php print $address; ?>"></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">CITY: </td><td><input name ="CITY" type="text" value = "<?php print $city; ?>"></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">STATE: </td><td><input name ="STATE" type="text" value = "<?php print $state; ?>"></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">ZIP: </td><td><input name ="ZIP" type="text" value = "<?php print $zip; ?>"></td>
</tr>
</table>
<td><input type="submit" value="UPDATE DATA" onclick="return confirm('Are you sure you want to EDIT data?')"> </td>
</form>

<?php
}
?>



</html>