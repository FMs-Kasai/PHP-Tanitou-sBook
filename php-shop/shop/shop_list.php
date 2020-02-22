<?php
  session_start();
  session_regenerate_id(true);
  if (isset($_SESSION['member_login'])==false) {
    print 'ようこそゲスト様';
    print '<br>';
    print '<a href="member_login.html">会員ログイン</a>';
    print '<br>';
  }
  else {
    print 'ようこそ';
    print $_SESSION['member_name'];
    print '様';
    print '<a href="member_logout.php">ログアウト</a><br>';
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
  <?php
  try {
    $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
    $user='root';
    $password='';
    $dbh=new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql='SELECT code,name,price FROM mst_product WHERE 1';
    $stmt=$dbh->prepare($sql);
    $stmt->execute();

    $dbh=null;

    print '<h1 class="heading">商品一覧</h1>';

    while (true) {
      $rec=$stmt->fetch(PDO::FETCH_ASSOC);
      if ($rec==false) {
        break;
      }
      print '<a href="shop_product.php?procode='.$rec['code'].'">';
      print $rec['name'].'---';
      print $rec['price'].'円';
      print '</a>';
      print '<br />';
    }

    print '<a href="shop_cartlook.php">カートを見る</a><br>';
    print '<a href="clear_cart.php">カートの中を空にする</a><br>';

  }

  catch (Exception $e) {
    print 'ただいまサーバーエラーのため接続できません。お手数ですが時間をおいてから再度お試しください';
    exit();
  }

   ?>

   <a href="../staff_login/staff_top.php">トップページへ</a>


</body>
</html>
