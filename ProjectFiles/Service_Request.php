<html>
<head>
<title>Service Request Page</title>
<script src="gen_validatorv4.js" type="text/javascript"></script>
</head>

<style>
body {
background-image: url("service1.jpg");
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



if(isset($_POST['Insert']))
{
	
?>
<p>
<table bgcolor="#FFFFFF">
<tr>
<td bgcolor="A5FFE7"><img src="anchor.png" width="50" height="50" />
<font face="impact" size="9" color="black"><b>Service Request Insert Page</b></font>
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
<form action = "Serv_ReqI.php" method = "post">
<font size="6" color="yellow"><b><u>Enter Service Request data to be INSERTED into the database:</b></u></font>
<table border="3">
<tr>
<td bgcolor="#FFFFFF">SERVICE ID: </td><td><input name="SERVICE_ID" type="text" size=”2”></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">SLIP ID: </td><td><input name="SLIP_ID" type="text" size=”2” <br></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">CATEGORY NUMBER: </td><td><input name="CATEGORY_NUM" type="text" size=”2” <br></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">DESCRIPTION: </td><td><input name="DESCRIPTION" type="text" size=”2” <br></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">STATUS: </td><td><input name="STATUS" type="text" size=”2” <br></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">ESTIMATED HOURS: </td><td><input name="EST_HOURS" type="text" size=”2” <br></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">SPENT HOURS: </td><td><input name="SPENT_HOURS" type="text" size=”2” <br></td>
</tr>
<tr>
<td bgcolor="#FFFFFF">NEXT SERVICE DATE: </td><td><input name="NEXT_SERVICEDATE" type="text" size=”2” <br></td>
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
<font face="impact" size="9" color="black"><b>Service Request Edit Page</b></font>
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
<form action = "Serv_ReqE.php" method = "post">
<font size="6" color="yellow">Enter the Service ID to find information to <b>MODIFY</b>:</font><br>
<table border="2">
<tr>
<td bgcolor="FFFFFF">SERVICE ID: <input name="SERVICE_ID" type="text" size=”2” /></td>
</tr>
<tr>
<td><input align="right" name="submit" type="submit" value="FIND DATA"/><td>
</tr>	
</form>
</table>
<?php
}
if(isset($_POST['Delete']))
{
?>
<p>
<table bgcolor="#FFFFFF">
<tr>
<td bgcolor="A5FFE7"><img src="anchor.png" width="50" height="50" />
<font face="impact" size="9" color="black"><b>Service Request Delete Page</b></font>
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
<form action = "Serv_ReqD.php" method = "post">
<font size="6" color="red"><b><u>Enter the Service ID to <b>DELETE<b> information:<u></b></font>
<table border="2">
<td bgcolor="FFFFFF">SERVICE ID: <input name="SERVICE_ID" type="text" size=”2” <br><br/></td>
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
<font face="impact" size="9" color="black"><b>Service Request Query Page</b></font>
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
<form action = "Serv_ReqQ.php" method = "post">
<font size="6" color="yellow"><b><u>Enter the SERVICE ID to <b>QUERY<b> information: </b></u></font>
<table>
<tr>
<td bgcolor="FFFFFF">SERVICE ID: <input name="SERVICE_ID" type="text" size=”2” /></td>
</tr>
<tr>
<td><input align="right" name="submit" type="submit" value="QUERY DATA"/>	</td>	
</tr>
</form>
</table>
<?php
}
if(isset($_POST['List']))
{
		$query = "SELECT * FROM SERVICE_REQUEST";
	if ($r = mysql_query($query))
{
	?>
	<font size="6" color="yellow"><b><u>Here is a List of all data in the Service Request table</b></u></font>
		<?php
	while($row = mysql_fetch_array($r)){
		?>
		<table border="2">
		<tr bgcolor="#FFFFFF">
		<td>SERVICE ID</td>
		<td><?php echo $row['SERVICE_ID']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>SLIP ID</td>
		<td><?php echo $row['SLIP_ID']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>CATEGORY NUMBER</td>
		<td><?php echo $row['CATEGORY_NUM']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>DESCRIPTION</td>
		<td><?php echo $row['DESCRIPTION']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>STATUS</td>
		<td><?php echo $row['STATUS']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>ESTIMATED HOURS</td>
		<td><?php echo $row['EST_HOURS']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>HOURS SPENT</td>
		<td><?php echo $row['SPENT_HOURS']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>NEXT SERVICE DATE</td>
		<td><?php echo $row['NEXT_SERVICEDATE']?></td> 
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