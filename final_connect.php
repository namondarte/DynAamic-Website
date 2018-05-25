<?php
/*$username = $_GET['name'];
$password = $_GET['password'];*/

$link = mysqli_connect("localhost", "root" , "", "test");

if ($link){
	
	print "You are connected to MySQL server.";
	
}
else {
	print "Connection failed. Try again";
}

$db = mysqli_select_db($link, "test"); 

if ($db) {
	print "You're connected to a database";
}
else {
	print "Couldn't open the database.";
}
	
?>