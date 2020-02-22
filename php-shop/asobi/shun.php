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
  $tuki=$_POST['tuki'];
  $yasai = ['','ブロッコリー','カリフラワー','レタス','みつば',
  'アスパラガス','セロリ','ナス','ピーマン','オクラ','さつまいも','大根',
  'ほうれんそう'];
  print $tuki;
  print '月は';
  print $yasai[$tuki];
  print 'が旬です';
   ?>

</body>
</html>
