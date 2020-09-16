<?php
require('../dbconnect.php');

$pdo->exec('insert into books set title="' . $_POST['title'] . '",description="' . $_POST['description'] . '",created_at=NOW()');
echo '接続成功しました.';
//header('Location: https://techacademy.jp/');
?>
<a href="../views/index.php">戻る</a>