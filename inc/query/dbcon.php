<!-- Database connection
coded by:
date:

last update:

New updates and fixes here -->

<?php
$username 	= "root"; 
$password 	= "r00t3r"; 
$hostname 	= "localhost"; 
$databasename = 'dpodata';
//1. create database connection

$connection = mysql_connect("$hostname", "$username", "$password");
if (!$connection) {
   
    die("Database connection failed: " .mysql_error());
}


$db_select = mysql_select_db("$databasename");
if (!$db_select) {
    
    die("Database selection failed" .mysql_error());
}
?>
