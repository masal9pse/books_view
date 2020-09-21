<?php
require('../dbconnect.php');

$picture = date('YmdHis') . $_FILES['picture']['name'];
$statement = $pdo->prepare('UPDATE books set title=?,description=?,picture = ? where id=?');
$statement->execute(array($_POST['title'], $_POST['description'], $picture, $_POST['id']));
move_uploaded_file($_FILES['picture']['tmp_name'], '../book_picture/' . $picture);
//uploaded_file($_FILES['picture']['tmp_name'], '../book_picture/' . $picture);
$_SESSION['join'] = $_POST;
$_SESSION['join']['picture'] = $picture;
//header('Location: ../views/bookList.php');
header('Location: ../views/bookList.php');
exit();
?>
<!--<p>メモの内容を変更しました</p>
<a href="../views/bookList.php">戻る</a>-->