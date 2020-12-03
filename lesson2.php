<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок 2. NIX курс PHP. Практика</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<header>
    <h1>Урок 2</h1>

    <nav>
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="lesson1.php">Урок 1</a></li>
            <li><span>Урок 2</span> </li>
            <li><a href="lesson3.php">Урок 3</a></li>
        </ul>
    </nav>
</header>

<main>

    <article>
        <h2>Таблица умножения разноцветная</h2>

        <p>
            <span class="number-1">1</span> - красный, <br>
            <span class="number-2">2</span> - зеленый, <br>
            <span class="number-3">3</span> - желтый, <br>
            <span class="number-4">4</span> - синий <br>
        </p>

        <table>

            <?php
                $limit = 1;
                $step = 5;
                for($i=1; $i<3; $i++) { ?>

                <tr>
                    <?php
                        $limit = $i===1 ? 1 : $limit+$step;

                        for($x=$limit; $x<($limit+$step); $x++) {
                            echo "<td>";
                            $str = "";
                            for ($y = 1; $y < 11; $y++) {
                                $str .= "$x&times;$y=" . $x * $y . "<br>";
                            }
                            $str = str_replace(
                                ['1', '2', '3', '4'],
                                [
                                    '<span class="number-1">1</span>',
                                    '<span class="number-2">2</span>',
                                    '<span class="number-3">3</span>',
                                    '<span class="number-4">4</span>',
                                ],
                                $str);
                            echo $str . "</td>";
                        }
                    ?>
                </tr>

            <?php } ?>

        </table>

    </article>

</main>

<footer>
    <p>NIX курс PHP. Практика.</p>

    <p><a href="https://education.nixsolutions.com/">NIX education</a></p>
</footer>


</body>
</html>