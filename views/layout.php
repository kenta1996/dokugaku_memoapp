<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="stylesheets/css/app.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="h2">
      <a class="text-primary" href="index.php">メモ一覧</a>
    </div>
  </nav>
  <div class="container">
    <?php include $content; ?>
  </div>
</body>

</html>