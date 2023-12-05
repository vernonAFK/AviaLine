<?php
require_once("db.php");

$login = $_COOKIE['username'];
$count_tickets = 0;

$sql = "SELECT * FROM `sold-tickets` WHERE login = '$login'";
$result = $conn->query($sql);

$id = array();
$start_place = array();
$end_place = array();
$start_time = array();
$end_time = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_row()) {
        array_push($id, $row[0]);
        array_push($start_place, $row[2]);
        array_push($end_place, $row[3]);
        array_push($start_time, $row[4]);
        array_push($end_time, $row[5]);
    }
    $count_tickets = $result->num_rows;
}
