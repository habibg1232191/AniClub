<?php require '../includes/getquery.php';

$search = $_POST['search'];
$opt = array(
  'search' => '' . $search . '',
  'limit' => '48',
    'rating' => '!rx'
);

$result_shikimori = Shikimori($opt);

echo json_encode($result_shikimori);