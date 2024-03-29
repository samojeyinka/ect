<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "ect";
$conn = new mysqli($servername, $username, $password, $db_name, 3307);
if ($conn->connect_error) {
    die("Error connecting to database".$conn->connect_error);
}
echo "";
