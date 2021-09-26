<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>
        <?php
            $title = 'Навыки';
            echo $title;
            ?>
        </title>
        <link rel="stylesheet" href="styles/style.css"> 
    </head>
    <body>
        <header>
            <div class="container">
            <nav class="menu">
            <a class = "navigation" href = "
                    <?php
                        $ref = 'index.php';
                        $text = 'Главная';
                        echo $ref;
                    ?>
                "
            ><?=$text;?></a>
            </nav>
            </div>
        </header>
        <main>
            <section id="skills">
                <h1>Навыки</h1>
                <p>Почему он используется? Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).</p>
            </section>
        </main>
        <footer>
            <div class="container">
                &copy; Катамадзе Анна Сергеевна
                <?php
                    date_default_timezone_set("Europe/Moscow");
                    echo '<p> Сформировано:'.date("d.m.Y в H-i.s").'</p>';
                ?>
            </div>
        </footer>
    </body>
</html>