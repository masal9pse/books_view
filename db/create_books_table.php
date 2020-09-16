<?php
require('../dbconnect.php');

$sql = 'CREATE TABLE books (
	id INT(11) AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(20),
	author VARCHAR(20),
	description VARCHAR(100),
	registry_datetime DATETIME
) engine=innodb default charset=utf8';

// SQLを実行
$res = $pdo->query($sql);
