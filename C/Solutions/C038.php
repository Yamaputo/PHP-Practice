<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>C038:お菓子の分配</title>
</head>
<body>
<?php

// $info = "3 15";
// $i_1 = "12";
// $i_2 = "13";
// $i_3 = "7";
// $i_4 = "2";
// $i_5 = "14";

$info = "3 7";
$i_1 = "2";
$i_2 = "3";
$i_3 = "4";

$info = make_array($info);
$mac_num = $info[0];
$snack_num = $info[1];


//スナックの数を配列にまとめる
$pattern = array();
for($i = 1; $i <= $mac_num; $i++){
  array_push($pattern, ${"i_".$i});
}
// print_r($pattern). "<br>". "<br>";


//あまりと容器の数を配列にいれる
$rest_array = array();
$pack_array = array();
foreach($pattern as $key => $value){
  $rest_num = $snack_num % $value;
  $pack_num = floor($snack_num / $value);
  array_push($rest_array, $rest_num);
  array_push($pack_array, $pack_num);
}

// print_r($rest_array). "<br>";
// print_r($pack_array). "<br>";
//比較して、一番あまりが少ない→容器が多いのを獲得

//余りが最小のキー獲得
$min_rest = array_keys($rest_array, min($rest_array));
$comp = array();
// echo "余りが最小のキー";
// print_r($min_rest);

//余りが最小のキーのパッケージ可能数
foreach($min_rest as $key => $value){
  $comp[$value] = $pack_array[$value];
}
// print_r($comp);

//最大のパッケージ数を獲得
$max = array_keys($comp, max($comp));
for($i = 0; $i < count($max); $i++){
  echo $max[$i] + 1;
  echo "<br>";
}


//配列に変換する関数
function make_array($var) {
  $a = explode(" ", $var);
  return $a;
}

?>
</body>
</html>