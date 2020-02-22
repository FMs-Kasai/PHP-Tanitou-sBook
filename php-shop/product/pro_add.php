<?php
  session_start();
  session_regenerate_id(true);
  if (isset($_SESSION['login'])==false) {
    print 'ログインされていません';
    print '<br>';
    print '<a href="../staff_login/staff_login.html">ログイン画面へ</a>';
    exit();
  }
  else {
    print $_SESSION['staff_name'];
    print 'さんがログイン中';
    print '<br>';
  }
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
  <p class="heading">商品追加</p>
  <form class="form" method="post" action="pro_add_check.php" enctype="multipart/form-data">
    <p class="desc">商品名を入力してください</p>
    <input type="text" name="name"><br />
    <p>価格を入力してください</p><br />
    <input type="text" name="price"> <br />
  　<p>画像を選んでください</p>
    <input type="file" name="image"><br />
    <input type="button" onclick="history.back()" value="戻る">
    <input type="submit" value="OK">
</body>
</html>
