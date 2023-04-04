
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<div class="flex-container">

    <div class="header">
        <?php include 'logo.inc.php' ?>
        <?php include 'menu.inc.php' ?>
    </div>

    <div class="about_me" >
        <?php  include 'main.inc.php'; ?>
        <h1> <?php echo $p ?> </h1>

        <div class="data">
            <div class="myImg">
                <?php include 'my_img.php'; ?>
                <!--                    --><?php // echo '<img src="/img/php.jpg">'; ?>
            </div>

            <div class="fullname">
                <p> Меня зовут
                    <?php echo $name, ' ', $surname . '<br>';
                    echo 'город', ' ', $city; ?>
                </p>

                <p> Мне
                    <?php  echo $age;   ?>
                    лет </p>
                <p> Мы научились создавать переменные </p>
                <p> Изучили простые операции с ними </p>
            </div>
        </div>

        <div class="knowledge">

            <?php  include 'knowledge.inc.php'; ?>
            <?php   echo $a, ' ', $b, ' ', $c; ?> <br>

            <?php
            $a = 9;
            $b = 7;
            $c = $a + $b;
            echo $c;
            ?>   <br>
            <?php
            echo $d;
            ?>

        </div>

        <div class="article">
            <p class="text">
                Мысли человека формируют его мировоззрение (отношение к миру) и самоотождествление (самоосознание).
                Это отражается во вне через речь и поведение.
                А также находит отражение внутри, настраивая организм и чувства на влияния внешнего мира.
                Так, человек и окружающий мир, как открытые системы, постоянно обмениваются потоками энергии, воздействуя друг на друга.
            </p>
        </div>
    </div>

    <?php include 'footer.inc.php' ?>

</div>


</body>
</html>

