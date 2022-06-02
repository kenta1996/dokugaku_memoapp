<?php

$errors = [];
$memos = [
  'title' => '',
  'detail' => ''
];

$title = 'メモの登録';
$content =  __DIR__ . '/views/new.php';
include __DIR__ . '/views/layout.php';