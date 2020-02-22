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
  <?php require_once('../common/common.php'); ?>

<p>ダウンロードしたい注文日を選んでください</p>
<form method="post" action="order_download_done.php">
  <?php pulldown_year() ?>
  <span>年</span>

  <?php pulldown_month() ?>
  <span>月</span>

  <?php pulldown_day() ?>
  <span>日</span><br>
  
  <input type="submit" name="" value="ダウンロードへ">
</form>
</body>
</html>
