<html>
<head>
<title>Service Category Page</title>
</head>
<style>
body {
background-image: url("scape.jpg");
    background-position: center;

	background-margin: 500px;
   
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



if(isset($_POST['Insert']))
{
?>
<p>
<table bgcolor="#FFFFFF">
<tr>
<td bgcolor="A5FFE7"><img src="anchor.png" width="50" height="50" />
<font face="impact" size="9" color="black"><b>Service Category Insert Page</b></font>
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
<form action = "Serv_CatI.php" method = "post">
<font size="6" color="black"><b><u>Enter Data to be Inserted:</b></u></font>
<table border="3">
<tr>
<td bgcolor="#FFFFFF">CATEGORY NUMBER:</td><td><input name="CATEGORY_NUM" type="text" size=”2” ></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">CATEGORY DESCRIPTION: </td><td><input name="CATEGORY_DESCRIPTION" type="text" size=”2” ></td>
</tr>
<tr>
<td><input type="submit" value="INSERT DATA" onclick="return confirm('Are you sure you want to INSERT data?')"> </td>
</tr>		
</form>
</table>

<?php
}

if(isset($_POST['Edit']))
{
?>
<p>
<table bgcolor="#FFFFFF">
<tr>
<td bgcolor="A5FFE7"><img src="anchor.png" width="50" height="50" />
<font face="impact" size="9" color="black"><b>Service Category Edit Page</b></font>
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
<form action = "Serv_CatE.php" method = "post">
<font size="6" color="black">Enter the Category Number to find information to <b>MODIFY</b>:</font><br>
<table border="2">
<tr>
<td bgcolor="FFFFFF">CATEGORY NUMBER: <input name="CATEGORY_NUM" type="text" size=”2” <br><br/></td>
</tr>
<tr>
<td><input align="right" name="submit" type="submit" value="FIND DATA"/><td>
</tr>	
</table>
</form>
<?php
}
if(isset($_POST['Delete']))
{
?>
<p>
<table bgcolor="#FFFFFF">
<tr>
<td bgcolor="A5FFE7"><img src="anchor.png" width="50" height="50" />
<font face="impact" size="9" color="black"><b>Service Category Delete Page</b></font>
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
<form action = "Serv_CatD.php" method = "post">
<font size="6" color="red"><b><u>Enter the Category Number to <b>DELETE<b> information:<u></b></font>
<table border="2">
<td bgcolor="FFFFFF">CATEGORY NUMBER: <input name="CAT_NUM" type="text" size=”2” <br><br/></td>
</tr>
<tr>
<td><input type="submit" value="DELETE DATA" onclick="return confirm('Are you sure you want to DELETE data?')"> </td>	
</tr>
</form>
</table>
<?php
}
if(isset($_POST['Query']))
{
?>
<p>
<table bgcolor="#FFFFFF">
<tr>
<td bgcolor="A5FFE7"><img src="anchor.png" width="50" height="50" />
<font face="impact" size="9" color="black"><b>Service Category Query Page</b></font>
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
<form action = "Serv_CatQ.php" method = "post">
<font size="6" color="black"><b><u>Enter the CATEGORY NUMBER to <b>QUERY<b> information: </b></u></font>
<table>
<tr>
<td bgcolor="FFFFFF">CATEGORY NUMBER: <input name="CATEGORY_NUM" type="text" size=”2” <br><br/></td>
</tr>
<tr>
<td><input align="right" name="submit" type="submit" value="QUERY DATA"/></td>	
</tr>
</form>
</table>
<?php
}
if(isset($_POST['List']))
{
		$query = "SELECT * FROM SERVICE_CATEGORY";
	if ($r = mysql_query($query))
{
	?>
	<font size="6" color="black"><b>Here is a List of all data in the Service Category table</u></b></font>
		<?php
	while($row = mysql_fetch_array($r)){
		?>
		<table border="2">
		<tr bgcolor="#FFFFFF">
		<td>CATEGORY NUMBER</td>
		<td><?php echo $row['CATEGORY_NUM']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>CATEGORY DESCRIPTION</td>
		<td><?php echo $row['CATEGORY_DESCRIPTION']?></td> 
		</tr>
		</table> 
		<br>
		<?php
}
}
}
?>




</body>
</html>