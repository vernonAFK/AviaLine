<?php
require_once("db.php");

$login = $_COOKIE['username'];
$start_place = $_POST['start_place'];
$end_place = $_POST['end_place'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];

$sql = "INSERT INTO `sold-tickets` (login, start_place, end_place, start_time, end_time) VALUES ('$login', '$start_place', '$end_place', '$start_time', '$end_time')";
$conn->query($sql);
header('Location: profile.php');
