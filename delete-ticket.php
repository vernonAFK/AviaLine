<?php
require_once("db.php");

$numberOfTicket = $_POST['id'];
$login = $_COOKIE['username'];

$sql = "DELETE FROM `sold-tickets` WHERE id = '$numberOfTicket' AND login = '$login'";
$result = $conn->query($sql);
header('Location: profile.php');
