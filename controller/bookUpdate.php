<?php
require('../dbconnect.php');

$statement = $pdo->prepare('UPDATE books set title=?,description=? where id=?');
$statement->execute(array($_POST['title'], $_POST['description'], $_POST['id']));
?>
<p>メモの内容を変更しました</p>
<a href="../views/bookList.php">戻る</a>