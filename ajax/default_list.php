<?php require '../includes/getquery.php';

$opt = array(
  'page' => $_POST['pageCount'],
    'limit' => '48',
  'order' => 'popularity'
);

$list_anime = Shikimori($opt);

echo json_encode($list_anime);