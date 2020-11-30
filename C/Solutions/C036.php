<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>C036:\[もし女コラボ問題\]犬ぞりトーナメント</title>
</head>
<body>

<h1>C036:\[もし女コラボ問題\]犬ぞりトーナメント</h1>
  
<?php

$who1 = "1 3";
$who2 = "2 4";
$time_first = "988 876 921 906";
$time_final = "866 911";

$who1 = make_array($who1);
$who2 = make_array($who2);
$time_first = make_array($time_first);
$time_final = make_array($time_final);

//一回戦突破走者を配列に格納
$winners = array();
for($i = 1; $i <=2; $i++){
  $records = records(${"who".$i}, $time_first);
  $winner = who_win($records);
  array_push($winners, $winner);
}

//二回戦勝者と敗者を出力
$key = who_win($time_final);
if($key == 1){
  $winner = max($winners);
  $loser = min($winners);
} elseif($key ==0){
  $winner = min($winners);
  $loser = max($winners);
}
echo $winner;
echo "<br>";
echo $loser;

//走者の番号とタイムを配列に格納する関数
function records($whos, $time){
  $vs = array();
  foreach($whos as $who){
    $vs[$who] = $time[$who-1];
  }
  return $vs;
}

//ランの勝者の番号を返す関数
function who_win($array) {
  $faster_time = min($array);
  $winner = array_keys($array, $faster_time);
  return $winner[0];
}

//配列に変換する関数
function make_array($var) {
  $a = explode(" ", $var);
  return $a;
}

?>

</body>
</html>