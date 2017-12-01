<html>
<head>
<title>OWNER PAGE</title>
</head>
<style>
body {
background-image: url("marina2.jpg");
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
<font face="impact" size="9" color="black"><b>Owner Insert Page</b></font>
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
<form action = "OwnerI.php" method = "post">
	<font size="6" color="black"><b><u>Insert Data to be INSERTED into the database:<u></b></font><br>
	
	
	
	<table border="2">
		<tr>
		<td bgcolor="#FFFFFF">OWNER NUMBER</td>
		<td bgcolor="#FFFFFF"><input name="OWNER_NUM" type="text" size=”2” ></td> 
		</tr>
		<tr>
		<td bgcolor="#FFFFFF">LAST_NAME</td>
		<td bgcolor="#FFFFFF"><input name="LAST_NAME" type="text" size=”2” ></td> 
		</tr>
		<tr>
		<td bgcolor="#FFFFFF">FIRST NAME</td>
		<td bgcolor="#FFFFFF"><input name="FIRST_NAME" type="text" size=”2” ></td> 
		</tr>
		<tr>
		<td bgcolor="#FFFFFF">ADDRESS</td>
		<td bgcolor="#FFFFFF"><input name="ADDRESS" type="text" size=”3”></td> 
		</tr>
		<tr>
		<td bgcolor="#FFFFFF">CITY</td>
		<td bgcolor="#FFFFFF"><input name="CITY" type="text" size=”6” ></td> 
		</tr>
		<tr>
		<td bgcolor="#FFFFFF">STATE</td>
		<td bgcolor="#FFFFFF"><input name="STATE" type="text" size=”14”></td> 
		</tr>
		<tr>
		<td bgcolor="#FFFFFF">ZIP</td>
		<td bgcolor="#FFFFFF"><input name="ZIP" type="text" size=”10”></td> 
		</tr>
		</table> 
<td><input type="submit" value="INSERT DATA" onclick="return confirm('Are you sure you want to INSERT data?')"> </td>		
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
<font face="impact" size="9" color="black"><b>Owner Edit Page</b></font>
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
<form action = "OwnerE.php" method = "post">
<font size="5" color="black"><b>Enter the Owner Number to find information to <b>EDIT<b>: </b></font><p>
OWNER_NUM: <input name="OWNER_NUM" type="text" size=”2” <br><br/>
<input align="right" name="submit" type="submit" value="FIND DATA"/>		
</form>
</p>
<?php
}
if(isset($_POST['Delete']))
{
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
<td bgcolor="#FFFFFF"><a href="Marina.html"><font size="5" color="blue">Marina Page</font></a></td>
<td bgcolor="#FFFFFF"><a href="Owner.html"><font size="5" color="blue">Owner Page</font></a></td>
<td bgcolor="#FFFFFF"><a href="Service.html"><font size="5" color="blue">Service Page</font></a></td>
</tr>
</table>
</p>
<form action = "OwnerD.php" method = "post">
<font size="5" color="red"><b>Enter the Owner Number to find information to <b>DELETE<b>: </b></font>
<p>
OWNER_NUM: <input name="OWNER_NUM" type="text" size=”2” <br><br/>
<td><input type="submit" value="DELETE DATA" onclick="return confirm('Are you sure you want to DELETE data?')"> </td>		
</form>
</p>

<?php
}
if(isset($_POST['Query']))
{
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
</p>
<form action = "OwnerQ.php" method = "post">
<font size="6" color="black"><b><b><u>To Query information about a specific Owner:</b></u></b></font><br>
<font size="5" color="white"><b><u>Enter Owner Number:<u></b></font><br>
<td bgcolor="FFFFFF"><input name="OWNER_NUM" type="text" size=”2” ></td> 
<input name="QUERY DATA" type="submit" size=”2” <br>
</form>
<br>
<form action = "OwnerQ2.php" method = "post">	
<font size="6" color="black"><b><u>To Query Owner information by boat length:</u></b></font></br>
<font size="5" color="white"><b><u>Select One:</u></b></font><br>
<table border="2" >
<tr bgcolor="#FFFFFF">
<td>EQUAL TO:  </td><td><input name="feet0" type="text" ></td>
</tr>
<tr bgcolor="#FFFFFF">
<td>GREATER THAN OR EQUAL TO:</td><td><input name="feet1" type="text"  ></td>
</tr>
<tr bgcolor="#FFFFFF">
<td>LESS THAN OR EQUAL TO:  </td><td><input name="feet2" type="text"  ></td>
</tr>
<tr>
</tr>
<tr bgcolor="#FFFFFF">
<td>IN BETWEEN : </td><td><input name="feet3" type="text" ></td>
<td>AND : </td><td><input name="feet4" type="text" ></td>
</tr>
<tr>
<td><input name="QUERY DATA" type="submit" size=”2” ></td>
</tr>
</table>
</form>


<?php
}
if(isset($_POST['List']))
{
		$query = "SELECT * FROM OWNER";
	if ($r = mysql_query($query))
{
	?>
	<font size="5" color="white"><b><u>Here is a List of all data in the Owner Slip table</u></b></font>
		<?php
	while($row = mysql_fetch_array($r)){
		?>
		<table border="2">
		<tr bgcolor="#FFFFFF">
		<td>OWNER_NUM</td>
		<td><?php echo $row['OWNER_NUM']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>LAST_NAME</td>
		<td><?php echo $row['LAST_NAME']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>FIRST_NAME</td>
		<td><?php echo $row['FIRST_NAME']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>ADDRESS</td>
		<td><?php echo $row['ADDRESS']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>CITY</td>
		<td><?php echo $row['CITY']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>STATE</td>
		<td><?php echo $row['STATE']?></td> 
		</tr>
		<tr bgcolor="#FFFFFF">
		<td>ZIP</td>
		<td><?php echo $row['ZIP']?></td> 
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