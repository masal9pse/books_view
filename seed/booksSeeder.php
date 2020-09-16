<?php

require('../dbconnect.php');

$insert_data_sql = "INSERT INTO books (id,title,author,description) VALUES (:id,:title,:author,:description)";
$insert_data = $pdo->prepare($insert_data_sql);

// 挿入する値を配列に格納する
$insert = array(':id' => 6, ':title' => '告白', ':author' => '湊かなえ', ':description' => 'おもしろいよ');
if ($insert_data->execute($insert)) {
 echo "テーブルに保存完了です";
}
