<?php

// $servername = "localhost";
// $database = "id20120322_users";
// $username = "id20120322_datos";
// $password = "lCyisw[4Xd#KX1xJ";


$servername = "localhost";
$database = "user";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>