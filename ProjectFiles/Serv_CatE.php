<html>
<head>
<title>Edit Service Data</title>
</head>
<style>
body {
background-image: url("scape.jpg");
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
<table border="3">
<tr bgcolor="A5FFE7">
<font size="12" color="black"><b>Service Category Edit Page</b></font>
</tr>
<tr>
<td bgcolor="#FFFFFF"><a href="Home.html"><font size="5" color="blue">Here is a link to the Home Page</font></a></td>
<td bgcolor="#FFFFFF"><a href="Marina.html"><font size="5" color="blue">Marina Page</font></a></td>
<td bgcolor="#FFFFFF"><a href="Owner.html"><font size="5" color="blue">Owner Page</font></a></td>
<td bgcolor="#FFFFFF"><a href="Service.html"><font size="5" color="blue">Service Page</font></a></td>
</tr>
</table>

<?php

$cat_num = $_POST['CATEGORY_NUM'];

$res = mysql_query("SELECT * FROM SERVICE_CATEGORY WHERE CATEGORY_NUM='$cat_num'");
$count = mysql_num_rows($res);



if($cat_num=='')
{
	echo "<script>alert('You did not fill in all of the fields!!! Please try again...');history.go(-1);</script>";

}
else if( $count == 0 ) {
     echo "<script>alert('The table for that Service ID does not exist. Please try again.');history.go(-1);</script>";
} 
else
{

$query = "SELECT * FROM SERVICE_CATEGORY
		WHERE CATEGORY_NUM = ('$cat_num')";

if ($r = mysql_query($query))
{
	while ($row = mysql_fetch_array($r)){
		$cat_num = $row['CATEGORY_NUM'];
		$cat_desc = $row['CATEGORY_DESCRIPTION'];
}
}
?>
<font size="10" color="blue">Enter the following data to be UPDATED:</font><br>
<form action = "Serv_CatE2.php" method = "post">
<table  bgcolor="FFFFFF">
<tr>
<td>CATEGORY NUMBER:</td>
<td> <input name="CATEGORY_NUM" type="text" size=”4” value = "<?php print $cat_num; ?>" ></td>
</tr>
<tr>
<td>CATEGORY DESCRIPTION:</td>
<td><input name = "CATEGORY_DESCRIPTION" type="text" value = "<?php print $cat_desc; ?>"></td>
</tr>
</table>
<td><input type="submit" value="UPDATE DATA" onclick="return confirm('Are you sure you want to EDIT data?')"> </td>
</form>
<?php
}
?>



</html>