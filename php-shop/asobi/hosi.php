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
  $mbango=$_POST['mbango'];

  $hosi['M1']='カニ星雲';
  $hosi['M31']='アンドロメダ大星雲';
  $hosi['M42']='オリオン大星雲';
  $hosi['M45']='すばる';
  $hosi['M57']='ドーナツ星雲';

  foreach ($hosi as $key => $value) {
    print $key.'は,'.$value;
    print '<br>';
    // code...
  }

  print 'あなたが選んだ星は、';
  print $hosi[$mbango];


   ?>

</body>
</html>
