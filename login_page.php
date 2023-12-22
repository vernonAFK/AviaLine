<?php
if (isset($_COOKIE['username'])) {
    header('Location: profile.php');
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>АвиаЛайн &mdash; вход</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1 title="АвиаЛайн"><a href="index.php">АвиаЛайн</a></h1>
    </header>
    <main class="forms">
        <h2><span class="selected"><a href="login_page.php">Вход</a></span> / <span class="not-selected"><a href="register_page.php">Регистрация</a></span></h2>
        <form action="login.php" method="post">
            <input type="text" placeholder="Введите логин" name="login" minlength="5" maxlength="30" required>
            <input type="password" placeholder="Введите пароль" name="password" minlength="5" maxlength="30" required>
            <input type="submit" value="Войти">
        </form>
    </main>
</body>

</html>