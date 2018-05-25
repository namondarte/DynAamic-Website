<?php

include_once("final_connect.php");
require("final_index.html");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$department =$POST['department'];
print "<br><br><br><br><br><br>";

print "<br>One record successfully added.";
$query = "INSERT INTO employee1 (first_name, last_name, gender, email, department) VALUES ('$first_name', '$last_name' , '$gender' , '$email', '$department')";

mysqli_query($link, $query);

//Retrieve record
$query = ("SELECT * FROM employee1");

$result = mysqli_query($link, $query);

$num_rows = mysqli_num_rows($result);

print "<br> $num_rows is successfully added in your list. ";
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