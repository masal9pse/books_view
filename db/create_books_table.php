<?php

try {

 /* リクエストから得たスーパーグローバル変数をチェックするなどの処理 */

 // データベースに接続
 $pdo = new PDO(
  'mysql:dbname=books_view;host=localhost;charset=utf8mb4',
  'root',
  'root',
  [
   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
   PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  ]
 );
 // テーブル作成のSQLを作成
 $sql = 'CREATE TABLE books (
	id INT(11) AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(20),
	description VARCHAR(100),
	registry_datetime DATETIME
) engine=innodb default charset=utf8';

 // SQLを実行
 $res = $pdo->query($sql);
 echo '接続できました';

 /* データベースから値を取ってきたり， データを挿入したりする処理 */
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
