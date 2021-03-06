<?php
include 'includes/getquery.php';

$options = array(
    'page' => '1',
    'limit' => '40',
    'order' => 'ranked',
    'status' => 'ongoing'
//    'season' => GetCurrentSeason() . '_' . date('Y'),
);

$shikimori = Shikimori($options);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html charset=utf-8">
    <link rel="stylesheet" href="dist/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Varela&display=swap" rel="stylesheet">
    <title>AniClub</title>
</head>
<body>

<?php include "includes/header.php"; ?>

<section>
    <h1 class="h1-title">AniClub — смотреть аниме онлайн бесплатно</h1>
    <p class="p-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Accusamus doloribus fugiat ipsum iusto libero minus perferendis possimus quaerat rerum ut?
    </p>
    <p class="p-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Commodi deserunt nemo veniam? Autem iste, possimus.
        A commodi cumque dolorem ex harum id reiciendis rerum, veritatis voluptas.
        Fugit hic perferendis possimus.
    </p>
</section>

<section id="carousel-anime">
    <h2 class="section-title">Аниме <?php echo GetSeason(GetCurrentSeason()) ?> сезона</h2>

    <?php include 'includes/slider.php'?>
</section>

<section>
    <div style="margin-bottom: 20px">
        <button class="btn btn btn-primary btn-lg" ripple data-tooltip="Press <b>And</b> Hold">Press</button>
        <button class="btn btn btn-success" ripple data-tooltip="Press <b>And</b> Hold">Press</button>
        <button class="btn btn btn-info" ripple>Press</button>
        <button class="btn btn btn-danger" ripple>Press</button>
        <button class="btn btn btn-outline" ripple>Press</button>
        <button onclick="openNotification('Hello', 'Lorem ipsum dolor sit <a href=https://ru.wikipedia.org/wiki/%D0%90%D0%BC%D0%B5%D1%82-%D0%A5%D0%B0%D0%BD,_%D0%A1%D1%83%D0%BB%D1%82%D0%B0%D0%BD>amet</a> consectetur adipisicing elit. Illo, voluptate?')" class="btn btn-df" ripple>Open Notification</button>
    </div>

</section>

<div id="tooltips"></div>

<div id="nfs">

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="dist/index.min.js"></script>
</body>
</html>