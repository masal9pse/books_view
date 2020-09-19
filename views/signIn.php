<?php

require('../dbconnect.php');

$err_msg = "";
if (isset($_POST['login'])) {
 $username = $_POST['name'];
 //$sql = 'select count(*) from users where username=? and password=?';
 $sql = 'select count(*) from users where name=?';
 $stmt = $pdo->prepare($sql);
 $stmt->execute(array($username));
 $result = $stmt->fetch();
 $stmt = null;
 $pdo = null;

 if ($result[0] != 0) {
  header('Location: index.php');
  exit;
 } else {
  $err_msg = "ユーザ名が誤りです。";
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
  <input type="submit" name="login" value="ログイン">
 </form>
 <!--<a href="signup.php">新規登録</a>-->

</body>

</html>