<?php

include_once("final_connect.php");
require("final_index.html");

$employee = $_POST['last_name'];

$query = "DELETE FROM employee1 WHERE last_name = \"$employee\"";

print "<br><br><br><br><br><br>";

print "The employee has been successfully deleted.";
mysqli_query($link, $query);

?>