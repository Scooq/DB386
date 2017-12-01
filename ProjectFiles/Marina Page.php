<html>
<head>
<title>Marina Page</title>
</head>

<style>
body {
background-image: url("assets/pier.jpg");
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
<td bgcolor="A5FFE7"><img src="assets/Anchor.png" width="50" height="50" />
<font face="impact" size="9" color="black"><b>Marina Slip Insert Page</b></font>
<img src="assets/Sailboat.png" width="50" height="50" />
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
<font size="6" color="black"><b><u>Enter Data to be Inserted:</b></u></font>

<form action = "MarinaI.php" method = "post">
<table border="3">
<tr>
<td bgcolor="#FFFFFF">SLIP ID:</td><td><input name="SLIP_ID" type="text" size=”2” <br></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">MARINA NUMBER: </td><td><input name="MARINA_NUM" type="text" size=”2” <br></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">SLIP NUMBER: </td><td><input name="SLIP_NUM" type="text" size=”2” <br></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">LENGTH: </td><td><input name="LENGTH" type="text" size=”3” <br></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">RENTAL FEE: </td><td><input name="RENTAL_FEE" type="text" size=”6” <br></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">BOAT NAME: </td><td><input name="BOAT_NAME" type="text" size=”14” <br></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">BOAT TYPE: </td><td><input name="BOAT_TYPE" type="text" size=”10” <br></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">OWNER NUMBER: </td><td><input name="OWNER_NUM" type="text" size=”4” <br></td>
</tr>
<tr>
<td><input type="submit" value="INSERT DATA" onclick="return confirm('Are you sure you want to INSERT data?')"> </td>
</tr>		
</table>
</form>

<?php
}

if(isset($_POST['Edit']))
{
?>


<p>
<table bgcolor="#FFFFFF">
<tr>
<td bgcolor="A5FFE7"><img src="anchor.png" width="50" height="50" />
<font face="impact" size="9" color="black"><b>Marina Slip Edit Page</b></font>
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
<form action = "MarinaE.php" method = "post">
<font size="6" color="black">Enter the Slip ID to find information to <b>MODIFY</b>:</font>
<table border="2">
<tr>
<td bgcolor="FFFFFF">SLIP ID: <input name="SLIP_ID" type="text" size=”2” <br></td>
</tr>
<tr>
<td><input type="submit" value="FIND DATA"> </td>
</tr>	
</form>
</table>
</p>
<?php
}
if(isset($_POST['Delete']))
{
?>
<p>
<table bgcolor="#FFFFFF">
<tr>
<td bgcolor="A5FFE7"><img src="assets/Anchor.png" width="50" height="50" />
<font face="impact" size="9" color="black"><b>Marina Slip Delete Page</b></font>
<img src="assets/SailBoat.png" width="50" height="50" />
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
<form action = "MarinaD.php" method = "post"> 
<font size="6" color="red"><b><u>Enter the Slip ID to <b>DELETE<b> Marina information:<u></b></font>
<table border="2">
<td bgcolor="FFFFFF">SLIP ID: <input name="SLIP_ID" type="text" size=”2” <br><br/></td>
</tr>
<tr>
<td><input type="submit" value="DELETE DATA" onclick="return confirm('Are you sure you want to DELETE data?')"> </td>	
</tr>
</form>
</table>
</p>


<?php
}
if(isset($_POST['Query']))
{
?>

<p>
<table bgcolor="#FFFFFF">
<tr>
<td bgcolor="A5FFE7"><img src="assets/Anchor.png" width="50" height="50" />
<font face="impact" size="9" color="black"><b>Marina Slip Query Page</b></font>
<img src="assets/SailBoat.png" width="50" height="50" />
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
<form action = "MarinaQ.php" method = "post">
<font size="6" color="black"><b><u>Enter the Slip ID to <b>Query<b> Marina information:<u></b></font>
<table>
<tr>
<td bgcolor="FFFFFF">SLIP ID: <input name="SLIP_ID" type="text" size=”2” <br><br/></td>
</tr>
<tr>
<td><input align="right" name="submit" type="submit" value="QUERY DATA"/>	</td>	
</tr>
</table>
</form>
</p>

<?php
}
if(isset($_POST['List']))
{
		$query = "SELECT * FROM MARINA_SLIP";
	if ($r = mysql_query($query))
{
	?>
	
	
	<font size="6" color="black"><b><u>Here is a List of all data in the Marina Slip table:<u></b></font><br>
		<?php
	while($row = mysql_fetch_array($r)){
		?>
		<table border="2">
		<tr>
		<td bgcolor="#FFFFFF">SLIP ID</td>
		<td bgcolor="#FFFFFF"><?php echo $row['SLIP_ID']?></td> 
		</tr>
		<tr>
		<td bgcolor="#FFFFFF">MARINA NUMBER</td>
		<td bgcolor="#FFFFFF"><?php echo $row['MARINA_NUM']?></td> 
		</tr>
		<tr>
		<td bgcolor="#FFFFFF">SLIP_NUM</td>
		<td bgcolor="#FFFFFF"><?php echo $row['SLIP_NUM']?></td> 
		</tr>
		<tr>
		<td bgcolor="#FFFFFF">LENGTH</td>
		<td bgcolor="#FFFFFF"><?php echo $row['LENGTH']?></td> 
		</tr>
		<tr>
		<td bgcolor="#FFFFFF">RENTAL_FEE</td>
		<td bgcolor="#FFFFFF"><?php echo $row['RENTAL_FEE']?></td> 
		</tr>
		<tr>
		<td bgcolor="#FFFFFF">BOAT_NAME</td>
		<td bgcolor="#FFFFFF"><?php echo $row['BOAT_NAME']?></td> 
		</tr>
		<tr>
		<td bgcolor="#FFFFFF">BOAT_TYPE</td>
		<td bgcolor="#FFFFFF"><?php echo $row['BOAT_TYPE']?></td> 
		</tr>
		<tr>
		<td bgcolor="#FFFFFF">OWNER_NUM</td>
		<td bgcolor="#FFFFFF"><?php echo $row['OWNER_NUM']?></td> 
		</tr>
		</table> 
		<br>
		
		<?php
}
}
?>

<table border="3">
<tr>
<td bgcolor="#FFFFFF"><a href="Home.html"><font size="5" color="blue">Here is a link to the Home Page</font></a></td>
<td bgcolor="#FFFFFF"><a href="Marina.html"><font size="5" color="blue">Marina Page</font></a></td>
<td bgcolor="#FFFFFF"><a href="Owner.html"><font size="5" color="blue">Owner Page</font></a></td>
<td bgcolor="#FFFFFF"><a href="Service.html"><font size="5" color="blue">Service Page</font></a></td>
</tr>
</table>
<?php
}
?>




</body>
</html>