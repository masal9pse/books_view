<?php
try {
 $pdo = new PDO(
  //'mysql:dbname=books_view;host=127.0.0.1;charset=utf8',
  'mysql:host=db;dbname=books_view_docker;charset=utf8mb4',
  'root',
  'root',
 );
} catch (PDOException $e) {
 echo '接続できてません' . $e->getMessage();
}
