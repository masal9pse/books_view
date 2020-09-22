<?php

$data = "https://www.googleapis.com/books/v1/volumes?q=東野圭吾";
$json = file_get_contents($data);
$json_decode = json_decode($json);
// jsonデータ内の『entry』部分を複数取得して、postsに格納
$posts = $json_decode->items;
//echo '<pre>';
//var_dump($posts);
//echo '<pre>';
foreach ($posts as $post) :
?>
 <a href="<?php print($post->volumeInfo->imageLinks->thumbnail); ?>">
  <?php print($post->volumeInfo->title); ?>
 </a>
<?php
endforeach;
?>