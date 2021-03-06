<?php //require "../vendor/autoload.php";
//require '../includes/getquery.php';
//$shikimori = Shikimori_Character(array(), '/' . $_GET['id']);
//
//?>

<!doctype html>
<html lang="en">
<head>
    <link rel="icon" href="../icons/animation.png">
    <link rel="stylesheet" href="../style/style_main.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $shikimori['russian'] ?></title>
</head>
<body>
<?php //include '../includes/header.php'?>
<!--<div>-->
<!--<h1 style="color: #d8d0d0; margin-left: 25px; width: max-content">--><?php //echo $shikimori['russian'] ?><!--</h1>-->
<!--<div class="cont">-->
<!--<img class="character-img" src="--><?php //echo GetImg($shikimori['image']['original']) ?><!--" alt="">-->
<!--<h2 class="character-description">--><?php
//    $desc = str_replace('https://shikimori.one/characters/', '../pages/character.php?id=', $shikimori['description_html']);
//    $desc = str_replace('https://shikimori.one/anime/', '../pages/page.php?id=', $desc);
//    echo $desc; ?><!--</h2>-->
<!--</div>-->
<!--</div>-->
<!--<h1 class="relation">Связанное</h1>-->
<!--<div class="container">-->
<?php //foreach ($shikimori['animes'] as $relation){?>
<!--      <div class="card">-->
<!--        <a href="../pages/page.php?id=--><?php //echo (int) $relation['id'] ?><!--">-->
<!--            <img class="card-img" src="--><?php //echo GetImg($relation['image']['original']) ?><!--" alt="">-->
<!--        <h1 class="card-title">--><?php //echo $relation['russian'] ?><!--</h1>-->
<!--        </a>-->
<!--      </div>-->
<?//}?>
<!--</div>-->

<h1 class="close-site">Сайт временно закрыт</h1>
<a class="new-design" href="#">Ссылка на новый дизайн</a>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>-->
<!--<script src="../scripts/js.js"></script>-->
</body>
</html>
