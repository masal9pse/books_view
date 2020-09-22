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
$stmt = $pdo->query("DROP TABLE users");
$results = $stmt->fetchall();
