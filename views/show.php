<?php
require('../dbconnect.php');

$book = $pdo->prepare('select * FROM books where id=?');
$book->execute([$_REQUEST['id']]);
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
 <?php if (!empty($book['picture'])) : ?>
  <img src="../book_picture/<?php echo $book['picture'] ?>" alt="">
 <?php else : ?>
  <p>画像が投稿されていません</p>
 <?php endif; ?>
 <td><a href="edit.php?id=<?php print(htmlspecialchars($book['id'])); ?>">編集する</td>
 <a href="bookList.php">戻る</a>
</body>

</html>