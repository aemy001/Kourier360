
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kourier360";

$conn = new mysqli($servername, $username, $password, $dbname );

if ($conn->connect_error){
    die("Connection failed: " . $conn->conect_error);
}
?>