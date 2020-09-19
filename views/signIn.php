<?php

$err_msg = "";

if (isset($_POST['login'])) {
 $username = $_POST['name'];
 //$password = $_POST['password'];
 try {
  $db = new PDO(
   'mysql:dbname=books_view;host=127.0.0.1;charset=utf8',
   'root',
   'root',
  );
  //$sql = 'select count(*) from users where username=? and password=?';
  $sql = 'select count(*) from users where name=?';
  $stmt = $db->prepare($sql);
  $stmt->execute(array($username));
  $result = $stmt->fetch();
  $stmt = null;
  $db = null;

  if ($result[0] != 0) {
   //header('Location: http://localhost:8080/home.php');
   //header('Location: post.html');
   header('Location: index.php');
   exit;
  } else {
   $err_msg = "ユーザ名が誤りです。";
  }
 } catch (PDOException $e) {
  echo $e->getMessage();
  exit;
 }
}

?>
<!DOCTYPE html>
<html>

<head>
 <meta charset="UTF=8">
 <title>ログイン画面</title>
</head>

<body>

 <h1>ログイン画面</h1>
 <form action="" method="POST">
  <?php if ($err_msg !== null && $err_msg !== '') {
   echo $err_msg . "<br>";
  } ?>
  ユーザ名<input type="text" name="name" value=""><br>
  <!--パスワード<input type="password" name="password" value=""><br>-->
  <input type="submit" name="login" value="ログイン">
 </form>
 <!--<a href="signup.php">新規登録</a>-->

</body>

</html>