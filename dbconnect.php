<?php
try {
 $pdo = new PDO(
  'mysql:dbname=books_view;host=127.0.0.1;charset=utf8',
  'root',
  'root',
 );
} catch (PDOException $e) {
 echo '接続できてません' . $e->getMessage();
}
