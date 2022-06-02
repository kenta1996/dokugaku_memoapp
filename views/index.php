<h1 class="h2 text-dark mt-4 mb-4">メモの一覧</h1>
<a href="create.php" class="btn btn-primary">メモの追加</a>
<?php if (!empty($memos)) : ?>
  <?php foreach ($memos as $memo) : ?>
    <div class="card mt-4">
      <h5 class="card-header"><?php echo escape($memo['title']); ?></h5>
      <div class="card-body">
        <p class="card-text"><?php echo escape($memo['detail']); ?></p>
      </div>
    </div>
  <?php endforeach; ?>
<?php else : ?>
  <p>値がありません</p>
<?php endif; ?>