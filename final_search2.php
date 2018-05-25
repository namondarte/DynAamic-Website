<?php

include_once("final_connect.php");
require("final_index.html");

$employee= $_POST['last_name'];

//Retrieve record code
//Retrieve record
$query = ("SELECT * FROM employee1 WHERE last_name = \"$employee\"");

$result = mysqli_query($link, $query);

$num_rows = mysqli_num_rows($result);


print "<br>There are $num_rows employee that matches your search. ";
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