<?php

try {
 $pdo = new PDO(
  'mysql:dbname=books_view;host=127.0.0.1;charset=utf8',
  'root',
  'root',
 );
} catch (PDOException $e) {
 echo '接続できてません';
}

$book = $pdo->query('select * from books where id=2');
$book = $book->fetch();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>本の一覧</title>
</head>

<body>
 <pre><?php echo $book['description']; ?></pre>
 <a href="index.php">戻る</a>
</body>

</html>