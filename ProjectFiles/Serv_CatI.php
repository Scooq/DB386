<html>
<head>
<title>Insert Service Data</title>
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
<font size="12" color="black"><b>Service Category Insert Page</b></font>
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

$cat_num = $_POST['CATEGORY_NUM'];
$cat_desc = $_POST['CATEGORY_DESCRIPTION'];
$res = mysql_query("SELECT * FROM SERVICE_CATEGORY WHERE CATEGORY_NUM=('$cat_num')");
$count = mysql_num_rows($res);
if($cat_num=='' || $cat_desc=='')
{
	echo "<script>alert('You did not fill in all of the fields!!! Please try again...');history.go(-1);</script>";
}
else if( $count > 0 ) {
	
	echo "<script>alert('The table for that Service ID already exists. Please try again.');history.go(-1);</script>";
} 

else
{

		  if(!$query = mysql_query("INSERT INTO SERVICE_CATEGORY VALUES('$cat_num','$cat_desc')")) {
die(mysql_error());
		  }
		  ?>
		<font size="10" color="blue">DATA HAS BEEN INSERTED INTO THE SERVICE CATEGORY DATABASE!</font>
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