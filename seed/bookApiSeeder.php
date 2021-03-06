<?php

try {
 $pdo = new PDO(
  'mysql:host=db;dbname=books_view_docker;charset=utf8',
  'root',
  'root',
 );
 $data = "https://www.googleapis.com/books/v1/volumes?q=宮沢賢治";
 $json = file_get_contents($data);
 $json_decode = json_decode($json);
 // jsonデータ内の『entry』部分を複数取得して、postsに格納
 $books = $json_decode->items;

 $insert_data_sql = "INSERT INTO books (id,title,author,picture,description) VALUES (:id,:title,:author,:picture,:description)";
 $insert_data = $pdo->prepare($insert_data_sql);

 // 挿入する値を配列に格納する
 foreach ($books as $book) {
  // id
  //$id = $book->id;
  $id = 8;
  // タイトル
  $title = $book->volumeInfo->title;
  // 説明
  $description = $book->volumeInfo->description;
  // サムネ画像
  $thumbnail = $book->volumeInfo->imageLinks->thumbnail;
  // 著者（配列なのでカンマ区切りに変更）
  $authors = implode(',', $book->volumeInfo->authors);

  $insert = array(':id' => $id++, ':title' => $title, ':author' => $authors, ':picture' => $thumbnail, ':description' => $description);
  $insert_data->execute($insert);
  //$insert_data->execute($book);
 }
 echo "テーブルに保存完了です";
 //if ($insert_data->execute($insert)) {
 // echo "テーブルに保存完了です";
 //}
} catch (PDOException $e) {
 echo '接続できてません' . $e->getMessage();
}
