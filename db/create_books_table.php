<?php
try {
	$pdo = new PDO(
		'mysql:host=db;dbname=books_view_docker;charset=utf8mb4',
		'root',
		'root',
	);
} catch (PDOException $e) {
	echo '接続できてません' . $e->getMessage();
}

$sql = 'CREATE TABLE books (
	id INT AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(255),
	author VARCHAR(255),
	picture VARCHAR(255),	
	description VARCHAR(100),
	created_at DATETIME
) engine=innodb default charset=utf8';

// SQLを実行
$res = $pdo->query($sql);
echo '接続成功';
