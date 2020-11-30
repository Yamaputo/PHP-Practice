<!DOCKTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<title>C018:何人前作れる？</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>C018:何人前作れる？</h1>
<?php

$n = 4;
$need1 = 'supaisu';
$need2 = 'imo';
$need3 = 'niku';
$need4 = 'mizu';
$needNum1 = 5;
$needNum2 = 2;
$needNum3 = 2;
$needNum4 = 3;

$m = 6;
$have1 = 'supaisu'; 
$have2 = 'imo';
$have3 = 'niku'; 
$have4 = 'mizu'; 
$have5 = 'unagi'; 
$have6 = 'ninjin';
$haveNum1 = 5;
$haveNum2 = 2;
$haveNum3 = 10;
$haveNum4 = 7;
$haveNum5 = 6;
$haveNum6 = 5;

// レシピの材料
$recipe = [];
for($i = 1; $i <= $n; $i++){
  $recipe = array_merge($recipe,array(${'need'.$i} => ${'needNum'.$i}));
}

echo "必要な材料は <br>";
foreach($recipe as $ingre => $howmany){
  echo $ingre. 'が'. $howmany. '個' . '<br>';
}

// 冷蔵庫の中身
$stock = [];
for($i = 1; $i <= $m; $i++){
  $stock = array_merge($stock,array(${'have'.$i} => ${'haveNum'.$i}));
}

echo "<br>";
echo "持っている材料は <br>";
foreach($stock as $ingre => $howmany){
  echo $ingre. 'が'. $howmany. '個' . '<br>';
}

//何人前かの配列を作成する
$howManyServing = array();
foreach($recipe as $ingre => $howmany){
  if(array_key_exists($ingre, $stock)){ 
    $num = floor($stock[$ingre] / $howmany);
    $howManyServing = array_merge($howManyServing, array($ingre => $num));
  }else{
    $howManyServing = array_merge($howManyServing, array($ingre => 0));
  }
}

//何人前かを出力する。
$result = min($howManyServing);
echo '<br>';
echo $result. '人前作れます。';

?>

</body>
</html>