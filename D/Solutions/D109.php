<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D109:ゾロ目の日付</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>D109:ゾロ目の日付</h1>

<?php

$m = 2;
$d = 2;

$md = $m.$d;
$len = strlen($md);

if($m >=1 && $m <= 12 && $d >= 1 && $d <= 31){
  if($len == 2){
    $day1 = substr($md, 0, 1);
    $day2 = substr($md, 1, 1);
    if($day1 == $day2){
      echo "Yes";
    }else{
      echo "No";
    }
  }
  if($len == 3){
    $day1 = substr($md, 0, 1);
    $day2 = substr($md, 1, 1);
    $day3 = substr($md, 2, 1);
    if($day1 == $day2 && $day2 == $day3){
      echo "Yes";
    }else{
      echo "No";
    }
  }
  if($len == 4){
    $day1 = substr($md, 0, 1);
    $day2 = substr($md, 1, 1);
    $day3 = substr($md, 2, 1);
    $day4 = substr($md, 3, 1);
    if($day1 == $day2 && $day2 == $day3 && $day3 == $day4){
      echo "Yes";
    }else{
      echo "No";
    }
  }
}else{
  echo "1 ≦ m ≦ 12, 1 ≦ d ≦ 31"; 
}



?>

</body>
</html>