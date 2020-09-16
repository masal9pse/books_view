<?php

try {
 $pdo = new PDO(
  'mysql:dbname=books_view;host=127.0.0.1;charset=utf8',
  'root',
  'root',
 );

 $select_data_sql = 'select * from books';
 $select_data_query = $pdo->query($select_data_sql);

 $row_count = $select_data_query->rowCount();

 while ($row = $select_data_query->fetch()) {
  $rows[] = $row;
 }
} catch (PDOException $e) {
 echo '接続できてません';
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
 foreach ($rows as $row) {
 ?>
  <tr>
   <br>
   <td><?php echo $row['id']; ?></td>
   <td><a href="show.php"><?php echo htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8'); ?></a></td>
   <!--<p class="day"><a href="view.php?id=<?php print(htmlspecialchars($post['id'])); ?>"><?php print(htmlspecialchars($post['created'], ENT_QUOTES)); ?></a>-->
   <br>
  </tr>
 <?php
 }
 ?>
</body>

</html>