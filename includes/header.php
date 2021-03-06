<?php

$lists = array(
    "Anime" => [
        "href" => "/anime",
        "list" => [
            "Popularity" => "/popularity",
            "Top 100" => "/top-100"
        ],
    ],
    "Manga" => [
        "href" => "/manga",
        "list" => [
            "Popularity" => "/popularity",
            "Top 100" => "/top-100"
        ],
    ]
);
?>

<header>
    <div class="header-left non-select">
        <a href="/"><span>AniClub</span></a>
    </div>
    <div class="header-right">
        <ul class="list-catalog">
            <?php foreach ($lists as $key => $value){?>
                <li class="dropdown-menu">
                    <a href="<?php echo $value['href'] ?>"><?php echo $key?></a>
                    <ul class="dropdown-content">
                        <?php foreach ($value['list'] as $k => $v) {?>
                            <li>
                                <a href="<?php echo $v?>"><?php echo $k?></a>
                            </li>
                        <?} ?>
                    </ul>
                </li>
            <?} ?>
        </ul>
        <ul class="list-catalog">
            <li class="dropdown-menu">
                <a href="">Войти</a>

            </li>
        </ul>
    </div>
</header>