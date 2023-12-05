<?php
if (!isset($_COOKIE['username'])) {
    header('Location: index.php');
} else {
    require_once("find_tickets.php");
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>АвиаЛайн &mdash; профиль</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1 title="АвиаЛайн"><a href="index.php">АвиаЛайн</a></h1>

        <a href="logout.php"><button>Выйти из профиля</button></a>
    </header>

    <main class="profile">
        <h1>Здравствуйте, <? echo $_COOKIE['username'] ?></h1>

        <h2>Ваши купленные билеты:</h2>

        <div class="tickets">
            <?php
            for ($i = 0; $i < $count_tickets; $i++) {
            ?>
                <div class="ticket"><?
                                    echo "Номер билета - №" . $id[$i] . "<br>";
                                    echo "Место отправления - " . $start_place[$i] . "<br>";
                                    echo "Место прибытия - " . $end_place[$i] . "<br>";
                                    echo "Дата взлёта - " . implode("-", array_reverse(explode("-", $start_time[$i]))) . "<br>";
                                    echo "Дата возвращения - " . implode("-", array_reverse(explode("-", $end_time[$i])))
                                    ?>
                </div>
            <?php
            }
            ?>
        </div>
    </main>
</body>

</html>