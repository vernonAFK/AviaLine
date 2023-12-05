<?php
require_once("db.php");

$login = trim($_POST['login']);
$password = md5(trim($_POST['password']));

$sql = "SELECT `id` FROM `users` WHERE login = '$login'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "Логин занят!";
    exit();
}

$sql = "INSERT INTO `users` (login, password) VALUES ('$login', '$password')";
$conn->query($sql);

$sql = "SELECT * FROM `users` WHERE login = '$login'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    setcookie("username", $row['login'], time() + 10800);
    header('Location: profile.php');
}
