<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "datatest";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>