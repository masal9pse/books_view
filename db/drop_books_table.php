<?php
try {
 $pdo = new PDO(
  'mysql:host=db;dbname=books_view_docker;charset=utf8mb4',
  'root',
  'root',
 );
 //$sql = 'DROP TABLE books_view_docker.items'
} catch (PDOException $e) {
 echo '接続できてません' . $e->getMessage();
}
//$stmt = $pdo->prepare('drop table if exists :tblname');
//$stmt->execute(array(':tblname' => 'items'));
//echo '削除を確認しました。';
$stmt = $pdo->query("DROP TABLE books");
$results = $stmt->fetchall();
