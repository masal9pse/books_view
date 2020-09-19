<?php

//require('../dbconnect.php');
try {
 $pdo = new PDO(
  'mysql:dbname=books_view;host=127.0.0.1;charset=utf8',
  'root',
  'root',
 );
 $insert_data_sql = "INSERT INTO users (id,name,age,registry_datetime) VALUES (:id,:name,:age,:registry_datetime)";
 //$insert_data_sql = "INSERT INTO users (id,name,age) VALUES (:id,:name,:age)";
 $insert_data = $pdo->prepare($insert_data_sql);

 // 挿入する値を配列に格納する
 $insert = array(':id' => 2, ':name' => 'まさと', ':age' => 20, ':registry_datetime' => date("Y/m/d"));
 //=> NOW()は無理
 //$insert = array(':id' => 2, ':name' => 'まさと', ':age' => 20, ':registry_datetime' => "NOW()");
 //$insert = array(':id' => 1, ':name' => 'まさと', ':age' => 10);
 if ($insert_data->execute($insert)) {
  echo "テーブルに保存完了です";
 }
} catch (PDOException $e) {
 echo '接続できてません' . $e->getMessage();
}
