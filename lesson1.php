<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок 1. NIX курс PHP. Практика</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<header>
    <h1>Урок 1</h1>

    <nav>
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><span>Урок 1</span> </li>
            <li><a href="lesson2.php">Урок 2</a></li>
            <li><a href="lesson3.php">Урок 3</a></li>
        </ul>
    </nav>
</header>

<main>

    <article>
        <h2>Таблица умножения</h2>

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
                            for ($y = 1; $y < 11; $y++) {
                                echo "$x&times;$y=" . $x * $y . "<br>";
                            }
                            echo "</td>";
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