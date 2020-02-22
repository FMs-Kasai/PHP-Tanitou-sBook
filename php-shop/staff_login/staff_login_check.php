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
    require_once('../common/common.php');

    $post=sanitize($_POST);
    $staff_code=$post['code'];
    $staff_pass=$post['pass'];

    $staff_pass=md5($staff_pass);

    $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
    $user='root';
    $password='';

    $dbh=new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql='SELECT name FROM mst_staff WHERE code=? AND password=?';
    $stmt=$dbh->prepare($sql);
    $data[]=$staff_code;
    $data[]=$staff_pass;
    $stmt->execute($data);

    $dbh=null;

    $rec=$stmt->fetch(PDO::FETCH_ASSOC);

    if ($rec==false) {
      print 'スタッフコードが間違っています';
      print '<a href="staff_login.html">戻る</a>';
    }
    else {
      session_start();
      $_SESSION['login']=1;
      $_SESSION['staff_code']=$staff_code;
      $_SESSION['staff_name']=$rec['name'];
      header('Location: staff_top.php');
      exit();
    }

  }

  catch (Exception $e) {
    print 'ただいまサーバーエラーのため接続できません。お手数ですが時間をおいてから再度お試しください';
    exit();
  }

   ?>

</body>
</html>
