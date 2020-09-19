<?php

//require('../dbconnect.php');
try {
 $pdo = new PDO(
  'mysql:dbname=books_view;host=127.0.0.1;charset=utf8',
  'root',
  'root',
 );
 $insert_data_sql = "INSERT INTO books (id,title,author,description) VALUES (:id,:title,:author,:description)";
 $insert_data = $pdo->prepare($insert_data_sql);

 // 挿入する値を配列に格納する
 $insert = array(':id' => 16, ':title' => '告白', ':author' => '湊かなえ2', ':description' => 'おもしろいよ');
 if ($insert_data->execute($insert)) {
  echo "テーブルに保存完了です";
 }
} catch (PDOException $e) {
 echo '接続できてません' . $e->getMessage();
}
