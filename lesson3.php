<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок 3. NIX курс PHP. Практика</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<header>
    <h1>Урок 3</h1>

    <nav>
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="lesson1.php">Урок 1</a></li>
            <li><a href="lesson2.php">Урок 2</a></li>
            <li><span>Урок 3</span> </li>
        </ul>
    </nav>
</header>

<main>

    <article>
        <h2>Форма</h2>

        <p>
            Преобразование в обратный порядок следования символов в строке.
        </p>



        <?php
            if (!empty($_GET['input1'])) {

                $strSafe = trim(htmlspecialchars($_GET['input1']));
                $strReversed = implode(array_reverse(mb_str_split($strSafe)));

                echo <<<START
                    <p><b>Было:</b></p>
                    <p>$strSafe</p>
                    <p><b>Стало:</b></p>
                    <p>$strReversed</p>
START;

                echo "<a class=\"button\" href='lesson3.php'>Назад</a>";
            } else {
        ?>

        <form method="get">
            <label class="label1" for="input1">Введите строку: </label>
            <input class="input1" type="text" name="input1" id="input1" autofocus>
            <input class="button" type="submit" value="Отправить">
        </form>

        <?php } ?>

    </article>

</main>

<footer>
    <p>NIX курс PHP. Практика.</p>

    <p><a href="https://education.nixsolutions.com/">NIX education</a></p>
</footer>


</body>
</html>