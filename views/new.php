<div class="mt-4 mb-4">
  <ul>
    <?php foreach ($errors as $error) : ?>
      <li class="text-danger">
        <p class="fs-1"><?php echo $error; ?></p>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
<h1>メモの登録</h1>
<div>
  <form action=" create.php" method="POST">
    <div class="mb-3">
      <label for="title" class="form-label">タイトル</label>
      <input type="text" id="title" name="title" class="form-control" value="<?php echo $memos['title']; ?>">
    </div>
    <div class="mb-3">
      <label for="detail" class="form-label">詳細</label>
      <input type="text" id="detail" name="detail" class="form-control" value="<?php echo $memos['detail']; ?>">
    </div>
    <button class="btn btn-outline-primary">登録</button>
  </form>
</div>