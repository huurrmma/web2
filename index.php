<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>
            <?php
            $title = 'Лабораторная работа 2';
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
                        $current = true;
                        echo $ref;
                    ?>
                    "
                    <?php
                        if ($current) echo 'id = "underline"';
                    ?>    
                    ><?=$text;?></a>
                    <a href="#about">обо мне</a>
                    <a href = "
                    <?php
                        $ref = 'skills.php';
                        $text = 'Навыки';
                        echo $ref;
                    ?>
                    "
                    ><?=$text;?></a>
                    <a href = "
                        <?php
                        $ref = 'technologies.php';
                        $text = 'Технологии';
                        echo $ref;
                        ?>
                    "
                    ><?=$text;?></a>
                
                <!-- <a href="#skills">навыки</a>
                <a href="#technologies">технологии</a> -->
            </nav>
            </div>
            <div class="text-center py-5">
                <h1>Катамадзе Анна Сергеевна</h1>
                <h2>Веб-разработчик</h2>
                
                <p class="w50 mg3 auto">Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца.</p>
                <a class="contact" href="mailto: hurmasort@gmail.com">Написать мне</a>
            </div>
        </header>
        <main>
            <div class="container">
            <section id="about">
                <h1>Обо мне</h1>
                   <?php
                    if (date("s")%2 === 0) {
                        $img_name = 'images\cat.jpg';
                    }
                    else {
                        $img_name = 'images\person.png';
                    }
                   ?> 

                <figure class="avatar">
                    <!-- <img src="images/person.png" alt="Картинка  с человеком"> -->
                    <img src = "<?=$img_name?>" alt="Person"> 
                </figure>
                <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>
            </section>
            <section id="skills">
                <h1>Навыки</h1>
                <p>Почему он используется? Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).</p>
                <div class="button-right">
                <a class="button-me" href="skills.php">Подробнее</a>
                </div>
            </section>
            <section id="technologies" style = "margin-bottom: 200px">
                <h1>Технологии</h1>
                <p>Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 "de Finibus Bonorum et Malorum" Цицерона и их английский перевод, сделанный H. Rackham, 1914 год.</p>
                <?php
                    $arr = array('HTML', 'CSS', 'JavaScript', 'C++');
                ?>
                <ul>
                    <li><?=$arr[0];?></li>
                    <li><?=$arr[1];?></li>
                    <li><?=$arr[2];?></li>
                    <li><?=$arr[3];?></li>
                </ul>
                <div class="button-right">
                <a class="button-me" href="technologies.php">Подробнее</a>
                </div>
            </section>
            </div>
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