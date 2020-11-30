<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>C037:アニメの日時</title>
</head>
<body>

<h1>C037:アニメの日時</h1>

<?php



$time = "01/27 25:30";

$time = make_array($time);

//hourを出す
$hour = get_hour($time);
//何日プラスするか
$add_day = get_add_day($hour);
//現状何日か
$day = get_day($time);
//月を求める
$month = get_month($time);
//add_day分をdayにプラス
$real_day = $day + $add_day;
//get_after_hour関数で時間を求める
$after_hour = get_after_hour ($add_day, $hour);
//minuteを求める
$minute = get_minute ($time);
//出力する値を変数に格納
//"01/27 25:30"の25時のように24時をオーバーしている場合、"01/28 01:30"のように時間を24時からは0時にする。加えて、24時から0時にしたので、27日から28日に変える。
//解き方としては、"01/27 25:30"の場合は25時は何日分オーバーしているのかを計算するために、25/24として、1日分オーバーしているとわかる。このオーバーした分を01/27の27に加えると28になる。このロジックで日付を変えました。
$output = $month . "/" .$add_day . " " . $after_hour . ":" . $minute;
echo $output;

//変数の月をreturn
function get_month ($time) {
  $month = strstr($time[0], '/', true);
  return $month;
}

//変数の日にちをreturn
function get_day ($time) {
  $day = strstr($time[0], '/', false);
  $day = substr($day, 1);
  return $day;
}

//変数のhourをreturn
function get_hour ($time) {
  $hour = strstr($time[1], ':', true);
  return $hour;
}

//変数のminuteをreturn
function get_minute ($time) {
  $minute = strstr($time[1], ':', false);
  $minute = substr($minute, 1);
  return $minute;
}

//何日add_dayなのかをreturn
function get_add_day($hour) {
  $add_day = floor($hour/24);
  return $add_day;
}

//add_day後のhourをreturn
function get_after_hour($add_day, $hour) {
  $after_hour = $hour - (24 * $add_day);
  $after_hour = str_pad($after_hour, 2, 0, STR_PAD_LEFT); 
  return $after_hour;
}

//配列に変換する関数
function make_array($var) {
  $a = explode(" ", $var);
  return $a;
}



?>
  
</body>
</html>