<?php
require_once("db.php");

$login = trim($_POST['login']);
$password = md5(trim($_POST['password']));

$sql = "SELECT * FROM `users` WHERE login = '$login' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        setcookie("username", $row['login'], time() + 10800);
        header('Location: profile.php');
    }
} else {
    echo "Неправильно набран логин или пароль!";
    exit();
}
