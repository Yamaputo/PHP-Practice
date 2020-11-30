<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D112:工場の生産力</title>
<style>

  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>D112:工場の生産力</h1>

<?php

$capa = 130.5;
$hour = 8;

if ($capa >=  1 && $capa <= 240){
  if ($hour >= 1 && $hour <= 24){
    $sum = $capa*$hour;
    echo $sum;
  }else{
    echo "1 ≦ h ≦ 24".PHP_EOL;
  }
}else{
  echo "1 ≦ n ≦ 200".PHP_EOL;
}


?>

</body>
</html>