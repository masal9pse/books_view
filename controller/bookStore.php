<?php
require('../dbconnect.php');

$picture = date('YmdHis') . $_FILES['picture']['name'];
$pdo->exec('insert into books set title="' . $_POST['title'] . '",description="' . $_POST['description'] . '",picture="' . $picture . '",created_at=NOW()');
//echo '接続成功しました.';
header('Location: ../views/bookList.php');
