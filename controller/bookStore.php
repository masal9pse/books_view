<?php
require('../dbconnect.php');

$pdo->exec('insert into books set title="' . $_POST['title'] . '",created_at=NOW()');
echo '接続成功しました.';
