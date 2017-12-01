<?php

session_start();
if(session_destroy()) // Destroy All Sessions
{
header("Location: Login.php"); // Redirecting To Home Page
}
?>