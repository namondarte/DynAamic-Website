<?php

include_once("final_connect.php");
require("final_index.html");

$Firstname = $_POST['first_name'];
$Last name = $_POST['last_name'];

$query = "UPDATE employee
set email\"$email\" WHERE last_name= \"$last_name\"";

mysqli_query($link, $query);

$query = ("SELECT * FROM employee WHERE last_name = \"$last_name\"");

$result = mysqli_query($link, $query);

$num_rows = mysqli_num_rows($result);

print "<br>These are $num_rows records. ";
print "<table border=\"1\">\n";
while ( $a_row = mysqli_fetch_row( $result) ) {
print"<tr>\n";
foreach ( $a_row as $field ) {
print "\t<td>".$field."</td>\n";	
}

print "</tr>\n";
}
print "</table>\n";
?>