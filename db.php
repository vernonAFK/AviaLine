<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "avia-line";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
    die("Connection Error!");
}
