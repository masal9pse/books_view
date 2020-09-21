<?php
require('../dbconnect.php');

$picture = date('YmdHis') . $_FILES['picture']['name'];
$pdo->exec('INSERT into books set title="' . $_POST['title'] . '",description="' . $_POST['description'] . '",picture="' . $picture . '",created_at=NOW()');
//var_dump($_FILES['picture']['tmp_name']);
move_uploaded_file($_FILES['picture']['tmp_name'], '../book_picture/' . $picture);
$_SESSION['join'] = $_POST;
$_SESSION['join']['picture'] = $picture;
//echo '接続成功しました.';
header('Location: ../views/bookList.php');
exit();
