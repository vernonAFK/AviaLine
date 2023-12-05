<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>АвиаЛайн &mdash; поиск и покупка авиабилетов</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1 title="АвиаЛайн">АвиаЛайн</h1>

        <ul>
            <li>
                <a href="login_page.php"><img src="img/user.png" alt="">
                    <?php
                    if (isset($_COOKIE['username'])) {
                        echo $_COOKIE['username'];
                    } else {
                        echo 'Профиль';
                    }
                    ?>
                </a>
            </li>
        </ul>
    </header>

    <main>
        <p>Поиск дешёвых авиабилетов тут</p>
        <p>↓</p>
        <a href="sales_page.php"><button title="Найти билеты">Найти билеты</button></a>
    </main>
</body>

</html>