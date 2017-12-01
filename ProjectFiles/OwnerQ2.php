<html>
<head>
<title>Query Owner Data</title>
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
<font face="impact" size="9" color="black"><b>Owner Query Page</b></font>
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
<br>
<?php

$feet0 = $_POST['feet0'];
$feet1 = $_POST['feet1'];
$feet2 = $_POST['feet2'];
$feet3 = $_POST['feet3'];
$feet4 = $_POST['feet4'];
$count =0;

if(!empty($feet0) && empty($feet1) && empty($feet2) && empty($feet3) && empty($feet4))
{
	$count = $feet0;
$query = "SELECT OWNER.OWNER_NUM,LAST_NAME,FIRST_NAME,LENGTH 
		   FROM OWNER INNER JOIN MARINA_SLIP
		   ON OWNER.OWNER_NUM=MARINA_SLIP.OWNER_NUM
		   WHERE MARINA_SLIP.LENGTH = '$feet0'";
		   
		  
}
else if(empty($feet0) && !empty($feet1) && empty($feet2) && empty($feet3) && empty($feet4))
{
	$count = $feet1;
$query = "SELECT OWNER.OWNER_NUM,LAST_NAME,FIRST_NAME,LENGTH
		   FROM OWNER INNER JOIN MARINA_SLIP
		   ON OWNER.OWNER_NUM=MARINA_SLIP.OWNER_NUM
		   WHERE MARINA_SLIP.LENGTH >= '$feet1'";
		   
		  
}
else if(empty($feet0) && empty($feet1) && !empty($feet2) && empty($feet3) && empty($feet4))
{
	$count = $feet2;
$query = "SELECT OWNER.OWNER_NUM,LAST_NAME,FIRST_NAME ,LENGTH
		   FROM OWNER INNER JOIN MARINA_SLIP
		   ON OWNER.OWNER_NUM=MARINA_SLIP.OWNER_NUM
		   WHERE MARINA_SLIP.LENGTH <= '$feet1'";
		   
		  
}
else if(empty($feet0) && empty($feet1) && empty($feet2) && !empty($feet3) && !empty($feet4))
{
	$count = $feet3;
	$count1 = $feet4;

$query = "SELECT OWNER.OWNER_NUM,LAST_NAME,FIRST_NAME ,LENGTH
		   FROM OWNER INNER JOIN MARINA_SLIP
		   ON OWNER.OWNER_NUM=MARINA_SLIP.OWNER_NUM
		   WHERE MARINA_SLIP.LENGTH >= '$feet3' AND MARINA_SLIP.LENGTH <= '$feet4'";	  
}
else if(empty($feet0) && empty($feet1) && empty($feet2) && empty($feet3) && empty($feet4))
{
	echo "<script>alert('You did not choose a length!!! Please try again...');history.go(-1);</script>";
}
else if( $count0 == 0 ) {
   
		echo "<script>alert('No boats of that length exist. Please try again.');history.go(-1);</script>";
}
else{
   
	
		echo "<script>alert('Only enter lengths for one row. Please try again.');history.go(-1);</script>";
}

if ($r = mysql_query($query))
{
		?>
		<font size="7" color="white"><b>Here is the list of data:</b></font>
		<?php
	while($row = mysql_fetch_array($r)){
		?>
		<table border="2">
		<tr bgcolor="#FFFFFF">
		<td>OWNER NUMBER</td>
		<td><?php echo $row['OWNER_NUM']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>LAST NAME</td>
		<td><?php echo $row['LAST_NAME']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>FIRST NAME</td>
		<td><?php echo $row['FIRST_NAME']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>BOAT LENGTH</td>
		<td><?php echo $row['LENGTH']?></td> 
		</tr>
		</table> 
		<br>
		<?php
}
}
?>






</html>