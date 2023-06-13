<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dms";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$database=new mysqli($servername, $username, $password, $dbname);
$database->select_db("$dbname");

?>