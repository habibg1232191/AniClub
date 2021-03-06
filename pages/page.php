<?php //require "../vendor/autoload.php";
//require "../includes/getquery.php";
//
//$shikimori = Shikimori(array(), '/' . $_GET['id']);
//
//$option = array(
//    'token' => '4a15fd264f4860aa018cfa26d8868a3d',
//    'type' => 'anime-serial',
//    'shikimori_id' => $shikimori['id']
//);
//
//$anime_video = GetAnime($option);
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

<h1 class="close-site">Сайт временно закрыт</h1>
<a class="new-design" href="#">Ссылка на новый дизайн</a>
<!---->
<?php //include '../includes/header.php';
//
//$episodes = '';
//if($shikimori['episodes'] == $shikimori['episodes_aired']){
//    $episodes = $shikimori['episodes'];
//} elseif ($shikimori['episodes'] != $shikimori['episodes_aired'] & $shikimori['status'] != 'released'){
//    $episodes = $shikimori['episodes_aired'] . '/' . $shikimori['episodes'];
//} elseif($shikimori['episodes'] == 0 & $shikimori['status'] == 'anons'){
//    $episodes = '?';
//} elseif($shikimori['status'] == 'released'){
//    $episodes = $shikimori['episodes'];
//}
//
//$array = [
//    'Статус' => mb_strtolower(str_replace('_'," ", $shikimori['status'])),
//    'Год' => substr($shikimori['aired_on'], 0, 4),
//    'Жанры' => GetArray($shikimori['genres'], 'russian', '   '),
//    'Эпизоды' => $episodes,
//    'Формат' => mb_strtoupper($shikimori['kind']),
//    'Рейтинг' => mb_strtoupper($shikimori['rating']),
//    'Студия' => GetStudious($shikimori['studios']),
//    'Продолжительность в минутах' => $shikimori['duration']
//];
//
//?>
<!--<div class="more-grid">-->
<!--    <div class="center">-->
<!--        <img class="img_2" src="--><?php //echo GetImg($shikimori['image']['original']) ?><!--" alt="">-->
<!--    </div>-->
<!--    <div class="other_title_div">-->
<!--        <h1 class="title relation">Информация</h1>-->
<!--        <ul class="staff">-->
<!--        --><?php //echo Staff($array) ?>
<!--            </ul>-->
<!--        </div>-->
<!--</div>-->
<!--<div class="padding-10">-->
<!--    <h2 class="description">--><?php
//        $result = str_replace('https://shikimori.one/characters/', '../pages/character.php?id=', $shikimori['description_html']);
//        $result = str_replace('https://shikimori.one/animes/', '../pages/page.php?id=', $result);
//        echo $result ?><!--</h2>-->
<!--</div>-->
<?// if ($anime_video['results'][0]['link'] != null){?>
<!--  <div class="player center">-->
<!--    <iframe style="height: -webkit-fill-available" height="100%" src="--><?php //echo $anime_video['results'][0]['link'] ?><!--" width="95%" frameborder="0" allowfullscreen allow="autoplay *; fullscreen *"></iframe>-->
<!--  </div>--><?//}?>
<!--<br>-->
<!--<br>-->
<?php
//$relations = Shikimori(array(), '/' . $shikimori['id'] . '/related');
//
// if($relations != null) : ?>
<!--<h1 class="relation">Связанное: </h1>-->
<!--<div class="container">-->
<?php
//foreach ($relations as $relation)
//    if($relation['anime'] != null and $relation['anime']['image']['original'] != null and $relation['anime']['id'] != null) {{?>
<!--      <div class="card">-->
<!--          <a class="hover" href="/pages/page.php?id=--><?php //echo $relation['anime']['id'] ?><!--"><img class="card-img" src="--><?php //echo GetImg($relation['anime']['image']['original']) ?><!--" alt="">-->
<!--          <h2 class="card-title">--><?php //echo $relation['anime']['russian'] ?><!--</h2></a>-->
<!--      </div>-->
<!--    --><?//}
//    }
//endif;
//?>
<!--</div>-->
<!--<h1>-->
<?php
//$character = Shikimori(array(), '/' . $shikimori['id'] . '/roles');
//
//if ($character != null) :?><!--</h1>-->
<!---->
<!--<h1 class="relation">Главные Герои:</h1>-->
<!--<div class="container-character">-->
<?php
//
//foreach ($character as $pars){
//    if ($pars['character'] != null and $pars['roles'][0] == "Main") {?>
<!--      <div class="card-character">-->
<!--    <a class="hover" href="/pages/character.php?id=--><?php //echo $pars['character']['id'] ?><!--">-->
<!--        <img class="card-character-img" src="--><?php //echo GetImg($pars['character']['image']['original']) ?><!--" alt="">-->
<!--        <h2 class="card-character-title">--><?php //echo $pars['character']['russian'] ?><!--</h2>-->
<!--    </a>-->
<!--      </div>-->
<?//  }
//}
//endif;
//?>
<!--</div>-->

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>-->
<!--<script src="../scripts/js.js"></script>-->
</body>
</html>