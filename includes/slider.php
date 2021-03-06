<?php
$options = array(
    'page' => '1',
    'limit' => '40',
    'order' => 'ranked',
    'status' => 'ongoing'
//    'season' => GetCurrentSeason() . '_' . date('Y'),
);

$shikimori = Shikimori($options);
?>

<div class="carousel">
    <div class="slider">
        <?php foreach ($shikimori as $value){?>
            <div class="card no-select">
                <a href="#">
                    <img alt="<?php echo $value['russian'] ?>" src="<?php echo GetImg($value['image']['original']) ?>" class="card-img">
                    <p title="<?php echo $value['russian'] ?>" class="card-title"><?php echo $value['russian'] ?></p>
                </a>
            </div>
        <?}?>
    </div>
</div>