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
  $gakunen=$_POST['gakunen'];

  switch ($gakunen) {
    case '1':
      $kousha='あなたの校舎は南校舎です';
      $bukatu='部活動には運動系と文科系があります';
      $mokuhyo='まずは学校に慣れましょう';
      break;
    case '2':
      $kousha='あなたの校舎は西校舎です';
      $bukatu='一生懸命取り組みましょう';
      $mokuhyo='今しかできないことを見つけよう';
      break;
    case '3':
      $kousha='あなたの校舎は東校舎です';
      $bukatu='受験、就職に忙しくなります後輩に譲っていきましょう';
      $mokuhyo='将来について考えよう';
      break;

    default:
      $kousha='あなたの校舎は3年生と同じです';
      $bukatu='部活動はありません';
      $mokuhyo='早く卒業しましょう';
      break;
  }

  print '校舎　'.$kousha. '<br>';
  print '部活　'.$bukatu. '<br>';
  print '目標　'.$mokuhyo. '<br>';

   ?>

</body>
</html>
