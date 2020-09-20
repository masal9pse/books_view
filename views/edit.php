<?php require('../dbconnect.php'); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>本の編集画面</title>
</head>

<body>
 <?php
 $id = $_REQUEST['id'];

 $books = $pdo->prepare('SELECT * FROM books where id = ?');
 $books->execute(array($id));
 $book = $books->fetch();
 ?>
 <form action="../controller/bookUpdate.php" method="post">
  <div>
   タイトル
   <input type="text" name="title" value="<?php echo $book['title']; ?>">
  </div>
  <br>
  <div>
   内容
   <textarea name="description" id="" cols="30" rows="10">
   <?php echo $book['description']; ?>
   </textarea>
   <button type="submit">登録する</button>
  </div>
 </form>
</body>

</html>