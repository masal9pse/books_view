<?php
try {
 $pdo = new PDO(
  //'mysql:dbname=books_view;host=127.0.0.1;charset=utf8',
  'mysql:host=db;dbname=books_view_docker;charset=utf8mb4',
  'root',
  'root',
 );
 echo '接続成功';
} catch (PDOException $e) {
 echo '接続できてません' . $e->getMessage();
}

//try {

// echo (new PDO(
//  //'mysql:host=mysql;dbname=sample;charset=utf8mb4',
//  'mysql:host=db;dbname=sample;charset=utf8mb4',
//  'root',
//  'root'
// ))
//  ->query('select concat(\'MySQL Version :\', version()) v')
//  ->fetch()['v'];
// echo '接続完了';
