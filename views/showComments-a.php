<div class="wrapper-comments" style="border: 2px dashed blue">
  <div class="child-wp-comments">
    <p>Ник: Аноним</p>
	<p>Комментарий: <?= $row['comments']?>
  </div><br>
  <a href="#" onclick="delPost(this, <?= $row['id']?>)">Удалить пост</a>
</div>