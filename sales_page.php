<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>АвиаЛайн &mdash; поиск и покупка авиабилетов</title>

    <link rel="stylesheet" href="style.css">
    <script src="main.js" defer></script>
</head>

<body>
    <header>
        <h1><a href="index.php">АвиаЛайн</a></h1>

        <nav>
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
        </nav>
    </header>

    <main class="find-tickets">
        <h2>Покупка авиабилета</h2>
        <div id="tickets">
            <form action="add_ticket.php" method="post">
                <select name="start_place" required>
                    <option disabled selected value=''>Место отправления</option>

                    <optgroup label="Великобритания">
                        <option value="Лондон | Великобритания">Лондон</option>
                        <option value="Манчестер | Великобритания">Манчестер</option>
                        <option value="Бирмингем | Великобритания">Бирмингем</option>
                        <option value="Оксфорд | Великобритания">Оксфорд</option>
                        <option value="Ливерпуль | Великобритания">Ливерпуль</option>
                    </optgroup>

                    <optgroup label="Германия">
                        <option value="Берлин | Германия">Берлин</option>
                        <option value="Гамбург | Германия">Гамбург</option>
                        <option value="Мюнхен | Германия">Мюнхен</option>
                    </optgroup>

                    <optgroup label="Испания">
                        <option value="Мадрид | Испания">Мадрид</option>
                        <option value="Барселона | Испания">Барселона</option>
                        <option value="Севилья | Испания">Севилья</option>
                    </optgroup>

                    <optgroup label="Италия">
                        <option value="Рим | Италия">Рим</option>
                        <option value="Венеция | Италия">Венеция</option>
                        <option value="Милан | Италия">Милан</option>
                        <option value="Флоренция | Италия">Флоренция</option>
                    </optgroup>

                    <optgroup label="Китай">
                        <option value="Пекин | Китай">Пекин</option>
                        <option value="Шанхай | Китай">Шанхай</option>
                    </optgroup>

                    <optgroup label="ОАЭ">
                        <option value="Абу-Даби | ОАЭ">Абу-Даби</option>
                        <option value="Дубай | ОАЭ">Дубай</option>
                        <option value="Эль-Фуджайра | ОАЭ">Эль-Фуджайра</option>
                    </optgroup>

                    <optgroup label="Россия">
                        <option value="Москва | Россия">Москва</option>
                        <option value="Сочи | Россия">Сочи</option>
                        <option value="Геленджик | Россия">Геленджик</option>
                        <option value="Санкт-Петербург | Россия">Санкт-Петербург</option>
                    </optgroup>

                    <optgroup label="США">
                        <option value="Вашингтон | США">Вашингтон</option>
                        <option value="Нью-Йорк | США">Нью-Йорк</option>
                        <option value="Лос-Анджелес | США">Лос-Анджелес</option>
                        <option value="Сан-Франциско | США">Сан-Франциско</option>
                    </optgroup>

                    <optgroup label="Таиланд">
                        <option value="Бангкок | Таиланд">Бангкок</option>
                        <option value="Чиангмай | Таиланд">Чиангмай</option>
                    </optgroup>

                    <optgroup label="Франция">
                        <option value="Париж | Франция">Париж</option>
                        <option value="Марсель | Франция">Марсель</option>
                        <option value="Ницца | Франция">Ницца</option>
                        <option value="Страсбург | Франция">Страсбург</option>
                    </optgroup>
                </select>

                <img src="img/arrow.png">

                <select name="end_place" required>
                    <option disabled selected value=''>Место прибытия</option>

                    <optgroup label="Великобритания">
                        <option value="Лондон | Великобритания">Лондон</option>
                        <option value="Манчестер | Великобритания">Манчестер</option>
                        <option value="Бирмингем | Великобритания">Бирмингем</option>
                        <option value="Оксфорд | Великобритания">Оксфорд</option>
                        <option value="Ливерпуль | Великобритания">Ливерпуль</option>
                    </optgroup>

                    <optgroup label="Германия">
                        <option value="Берлин | Германия">Берлин</option>
                        <option value="Гамбург | Германия">Гамбург</option>
                        <option value="Мюнхен | Германия">Мюнхен</option>
                    </optgroup>

                    <optgroup label="Испания">
                        <option value="Мадрид | Испания">Мадрид</option>
                        <option value="Барселона | Испания">Барселона</option>
                        <option value="Севилья | Испания">Севилья</option>
                    </optgroup>

                    <optgroup label="Италия">
                        <option value="Рим | Италия">Рим</option>
                        <option value="Венеция | Италия">Венеция</option>
                        <option value="Милан | Италия">Милан</option>
                        <option value="Флоренция | Италия">Флоренция</option>
                    </optgroup>

                    <optgroup label="Китай">
                        <option value="Пекин | Китай">Пекин</option>
                        <option value="Шанхай | Китай">Шанхай</option>
                    </optgroup>

                    <optgroup label="ОАЭ">
                        <option value="Абу-Даби | ОАЭ">Абу-Даби</option>
                        <option value="Дубай | ОАЭ">Дубай</option>
                        <option value="Эль-Фуджайра | ОАЭ">Эль-Фуджайра</option>
                    </optgroup>

                    <optgroup label="Россия">
                        <option value="Москва | Россия">Москва</option>
                        <option value="Сочи | Россия">Сочи</option>
                        <option value="Геленджик | Россия">Геленджик</option>
                        <option value="Санкт-Петербург | Россия">Санкт-Петербург</option>
                    </optgroup>

                    <optgroup label="США">
                        <option value="Вашингтон | США">Вашингтон</option>
                        <option value="Нью-Йорк | США">Нью-Йорк</option>
                        <option value="Лос-Анджелес | США">Лос-Анджелес</option>
                        <option value="Сан-Франциско | США">Сан-Франциско</option>
                    </optgroup>

                    <optgroup label="Таиланд">
                        <option value="Бангкок | Таиланд">Бангкок</option>
                        <option value="Чиангмай | Таиланд">Чиангмай</option>
                    </optgroup>

                    <optgroup label="Франция">
                        <option value="Париж | Франция">Париж</option>
                        <option value="Марсель | Франция">Марсель</option>
                        <option value="Ницца | Франция">Ницца</option>
                        <option value="Страсбург | Франция">Страсбург</option>
                    </optgroup>
                </select>

                <input id="start_time" type="date" name="start_time" required>
                <input id="end_time" type="date" name="end_time" required>

                <?php
                if (!isset($_COOKIE['username'])) {
                ?>
                    <input type="submit" value="Необходимо войти в профиль" disabled>
                <?php
                } else {
                ?>
                    <input type="submit" value="Купить билет">
                <?php
                }
                ?>
            </form>
        </div>
    </main>
</body>

</html>