<?php
require('../dbconnect.php');

$select_data_sql = 'select * from books';
$select_data_query = $pdo->query($select_data_sql);

while ($book = $select_data_query->fetch()) {
 $books[] = $book;
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>本の一覧</title>
</head>

<body>
 <?php
 foreach ($books as $book) {
 ?>
  <tr>
   <br>
   <td><?php echo $book['id']; ?></td>
   <td><a href="show.php?id=<?php print(htmlspecialchars($book['id'])); ?>"><?php echo htmlspecialchars($book['title'], ENT_QUOTES, 'UTF-8'); ?></a></td>
   <br>
  </tr>
 <?php
 }
 ?>
 <a href="post.html">投稿画面へ</a>
</body>

</html>