<?php


require_once __DIR__ . '/lib/escape.php';
require_once __DIR__ . '/lib/mysqli.php';

function getList($link)
{
  $memos = [];
  $sql = 'SELECT * FROM memos';

  $results = mysqli_query($link, $sql);
  if (!$results) {
    error_log('Erorr: fail to create companies');
    error_log('Debugging error : ' . mysqli_error($link));
  }
  while ($memo = mysqli_fetch_assoc($results)) {
    $memos[] = $memo;
  }
  mysqli_free_result($results);
  return $memos;
}


$link = dbConnect();
$memos = getList($link);
mysqli_close($link);

$title = "メモの一覧";
$content =  __DIR__ . '/views/index.php';
include __DIR__ . '/views/layout.php';