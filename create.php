<?php

require_once __DIR__ . '/lib/mysqli.php';

$errors = [];

function createList($link, $memos)
{

$sql = <<<EOT
INSERT INTO memos(
  title,
  detail
) VALUES (
  "{$memos['title']}",
  "{$memos['detail']}"
)
EOT;

  $result = mysqli_query($link, $sql);
  if (!$result) {
    error_log('Erorr: fail to create companies');
    error_log('Debugging error : ' . mysqli_error($link));
  }
}

function validate($memos)
{
  $errors = [];
  if (empty(strlen($memos['title']))) {
    $errors['title'] = 'メモのタイトルを入力して下さい';
  } elseif ((strlen($memos['title'])) > 50) {
    $errors['title'] = 'メモのタイトルは50文字以内に入力してください';
  }

  if (empty(strlen($memos['detail']))) {
    $errors['detail'] = 'メモの詳細を入力して下さい';
  }
  return $errors;
}

$memos = [
  'title' => '',
  'detail' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $memos = [
    'title' => $_POST['title'],
    'detail' => $_POST['detail']
  ];

  $errors = validate($memos);
  if (!count($errors) > 0) {
    $link = dbConnect();
    createList($link, $memos);
    mysqli_close($link);
    header("Location: index.php");
  }
}

$title = 'メモの登録';
$content =  __DIR__ . '/views/new.php';
include __DIR__ . '/views/layout.php';