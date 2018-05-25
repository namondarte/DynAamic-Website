<html>

<?php
include_once("final_connect.php");
require("final_index.html");


$query = "UPDATE employeelist set employee = \"Christine\" where last_name = \"Mendoza\"";

mysqli_query($link, $query);
?>

<form method="POST" action="final_update2.php">
<br><br><br>
<br><br><br>

*required fields <br><br>
First Name: <input type="text" name="first_name">
<br><br>
Last Name: <input type="text" name="last_name">
<br><br>
<input type="submit" value="Submit">
</form>


</html>
