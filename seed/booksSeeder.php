<?php

try {

 /* リクエストから得たスーパーグローバル変数をチェックするなどの処理 */

 // データベースに接続
 //$pdo = new PDO('mysql:dbname=mydb;host=127.0.0.1;charset=utf8', 'root', 'root');
 $pdo = new PDO(
  'mysql:dbname=books_view;host=127.0.0.1;charset=utf8',
  'root',
  'root',
 );
 $insert_data_sql = "INSERT INTO books (id,title,description) VALUES (:id,:title,:description)";
 $insert_data = $pdo->prepare($insert_data_sql);

 // 挿入する値を配列に格納する
 $insert = array(':id' => 7, ':title' => '告白', ':description' => '湊かなえ');
 //$insert_data->execute($insert);
 if ($insert_data->execute($insert)) {
  echo "テーブルに保存完了です";
 }
} catch (PDOException $e) {

 // エラーが発生した場合は「500 Internal Server Error」でテキストとして表示して終了する
 // - もし手抜きしたくない場合は普通にHTMLの表示を継続する
 // - ここではエラー内容を表示しているが， 実際の商用環境ではログファイルに記録して， Webブラウザには出さないほうが望ましい
 echo '接続できてません';
 //header('Content-Type: text/plain; charset=UTF-8', true, 500);
 //exit($e->getMessage());
}

// Webブラウザにこれから表示するものがUTF-8で書かれたHTMLであることを伝える
// (これか <meta charset="utf-8"> の最低限どちらか1つがあればいい． 両方あっても良い．)
header('Content-Type: text/html; charset=utf-8');
