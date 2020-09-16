<?php
require('../dbconnect.php');
// テーブル作成のSQLを作成
$sql = 'CREATE TABLE users (
	id INT(11) AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(20),
 age INT(11),
	registry_datetime DATETIME
) engine=innodb default charset=utf8';

// SQLを実行
$res = $pdo->query($sql);
