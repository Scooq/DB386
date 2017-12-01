<?php

// Address error handling

define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'DB386');

$conn = mysql_connect(DBHOST, DBUSER, DBPASS);
$dbcon = mysql_select_db(DBNAME);

if ( !$conn ) {
  die("Connection failed : " . mysql_error());
 }
 
 if ( !$dbcon ) {
  die("Database Connection failed : " . mysql_error());
 }