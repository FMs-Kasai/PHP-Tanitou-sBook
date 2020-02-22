<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
  $code = $_POST['code'];
  $dsn = 'mysql:dbname=phpkiso;host=localhost' ;
  $user = 'root';
  $password = '';
  $dbh = new PDO($dsn,$user,$password);
  $dbh -> query('SET NAMES utf8');

  $sql = 'SELECT * FROM anketo WHERE code=?';
  $stmt = $dbh -> prepare($sql);
  $data[] = $code;
  $stmt -> execute($data);

  while (1) {
    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($rec==false) {
      break;
    }
    print $rec['code'];
    print $rec['nickname'];
    print $rec['email'];
    print $rec['goiken'];
    print '<br />';

  }

  $dbh = null;
   ?>
</body>
</html>
