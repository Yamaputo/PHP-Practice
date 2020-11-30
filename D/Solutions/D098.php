<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D098:ボーナスの計算</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>D098:ボーナスの計算</h1>
<h3></h3>

<?php

$i = "1000000 6";

$i = explode(" ", $i);



if (preg_match('/^[0-9]+$/', $i[0]) && preg_match('/^[0-9]+$/', $i[1])){
  if ($i[0] >= 200000 && $i[0] <= 1000000 && $i[1]>= 1 && $i[1] <=6){
    $vonus = $i[0]*$i[1];
    echo $vonus;
  }else{
    echo "200,000 ≦ a ≦ 1,000,000 && 1 ≦ b ≦ 6";
  }
}else{
  echo "整数を入力して下さい。";
}




?>

</body>
</html>