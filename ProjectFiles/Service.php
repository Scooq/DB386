<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">

<head>
<title> SERVICE PAGE </title>
<style type=text/css>
p {text-align:center}
#footer { font-size: large;
			text-align: center;
			clear: right:
			padding-bottom: 20px;
}
body {
    background-image: url("Best.jpg");
	/*opacity: 0.4;
    filter: alpha(opacity=40); */
    background-repeat: no-repeat;
    background-position: middle-bottom;
	background-margin: 300px;
    	
	
}


</style> 
</head>
<p>
<table border="3">
<tr bgcolor="A5FFE7">
<font size="12" color="black"><b>Service Page</b></font>
</tr>
<tr>
<td bgcolor="#FFFFFF"><a href="Home.html"><font size="5" color="blue">Here is a link to the Home Page</font></a></td>
<td bgcolor="#FFFFFF"><a href="Marina.html"><font size="5" color="blue">Marina Page</font></a></td>
<td bgcolor="#FFFFFF"><a href="Owner.html"><font size="5" color="blue">Owner Page</font></a></td>
<td bgcolor="#FFFFFF"><a href="Service.html"><font size="5" color="blue">Service Page</font></a></td>
</tr>
</table>
</p>
<p>
<img align="center" src="boat.jpg" width="500" height="200" />
</p>
<p>
<br>
<br>
<font size="8" color="white" ><h2 align="center">Select one of the commands below to modify Service Category information</h2></font></p>
<p>
<form action="Service_Category.php" method="post">
<input align="right" name="Insert" type="submit" value="Insert Data"/>
<input align="right" name="Edit" type="submit" value="Edit Data"/>
<input align="right" name="Delete" type="submit" value="Delete Data"/>
<input align="right" name="Query" type="submit" value="Query Data"/>
<input align="right" name="List" type="submit" value="List all Data"/>
</form>
</p>
<p>

</a></p>
<p id="footer">
Date Updated: 10-6-15 </p>

</body>
</html>