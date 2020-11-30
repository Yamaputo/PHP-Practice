<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>C029</title>
<style>

</style>
</head>
<body>

<h1>C029:旅行の計画</h1>

<?php

$m = "10 4";
$d1 = "3 110";
$d2 = "4 25";
$d3 = "5 20";
$d4 = "6 65";
$d5 = "7 75";
$d6 = "8 0";
$d7 = "9 10";
$d8 = "10 100";
$d9 = "11 35";
$d10 = "12 80";

//祝日と旅行日の日数
$m = explode(" ", $m);
$holi = $m[0];
$restDay = $m[1];

// 日付と降水確率を配列に格納（キー[1]からスタート）
$info = array();
for($i = 1; $i <= $holi; $i++){
  $d = explode(" ", ${'d'.$i});
  array_push($info, $d);
}

//全パターンの平均降水確率を配列に格納
//全パターンの日付を格納
$patNum = $holi - ($restDay - 1);
$days = array();
$aveRainRates = array();
for($i = 0; $i < $patNum; $i++){
  $day = array();
  $rain = array();
  for($a = 0; $a < $restDay; $a++){
    array_push($days, $info[$i+$a][0]);
    array_push($rain, $info[($i+$a)][1]);
  }
  $sum = array_sum($rain);
  $aveRain = $sum / $restDay;
  //各パターンの平均降水確率を格納
  array_push($aveRainRates, $aveRain);
}

// print_r($aveRainRates);

//一番降水確率が低いパターンのキーを取得
$min = array_keys($aveRainRates, min($aveRainRates));
print_r($min);
print_r($days);

foreach($min as $val){
  echo $val;
  $key = $val + $restDay - 1;
  echo "降水確率の低い旅行日は" .$days[$val] ."日から" . $days[$key]. "日です。";
}



?>

</body>
</html>