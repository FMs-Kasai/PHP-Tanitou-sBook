<?php
session_start();
$_SESSION=array();
if (isset($_COOKIE[session_name()])==true) {
  setcookie(session_name(),'',time()-42000,'/');
}
session_destroy();
 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
  <p>カートを空にしました</p>
  <a href="shop_list.php">商品一覧に戻る</a>

</body>
</html>
