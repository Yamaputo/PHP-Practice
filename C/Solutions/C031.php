<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>C031:時差を求めたい</title>
  <style type="text/css">
  h1 {
    color: #9999FF;
  }
</style>
</head>
<body>
<h1>C031:時差を求めたい</h1>

<?php

$n = "600";
$p1 = "tokyo 9";
$p2 = "beijing 8";
$p3 = "singapore 7";
$p4 = "london 10";
$p5 = "newyork -5";
$p6 = "osaka 9";
$qt = "beijing 23:38";

$qt = explode(" ", $qt);
$theCity = $qt[0];
$theTime = $qt[1];
$theTime = explode(":", $theTime);
$theHour = $theTime[0];
$theMinute = $theTime[1];

$cities = array();
$timeDiffs = array();
for($i = 1; $i <= $n; $i++){//国と時差の配列作成
  $p = explode(" ", ${'p'.$i});
  array_push($cities, $p[0]);
  array_push($timeDiffs, $p[1]);
}

//条件
$miss = 0;
$output = "以下が間違っています。". "<br>";
if($n >= 1 && $n <= 100 ){ //1 ≦ N ≦ 100
}else{
  $output .= "1 ≦ N ≦ 100". "<br>";
  $miss += 1;
}
foreach($cities as $key => $val){//p\_i は英字小文字で構成される文字列  
  if(preg_match('/^[a-z]+$/',$val)){
  }else{
    $output .= "p". ($key + 1). "は英字小文字で構成される文字列でなければなりません". "<br>";
    $miss += 1;
  }
}
foreach($cities as $key => $val){//1 ≦ (p\_i の長さ) ≦ 20
  if(strlen($val) >= 1 && strlen($val) <= 20){
  }else{
    $output .= "1 ≦". " p". ($key + 1). "の長さ ≦ 20でなければなりません". "<br>";
    $miss += 1;
  }
}
foreach($timeDiffs as $key => $val){//-12 ≦ s\_i ≦ 12
  if($val >= -12 && $val <= 12){
  }else{
    $output .= "-12 ≦". " p". ($key + 1). "の世界標準時間からの時差 ≦ 12でなければなりません". "<br>";
    $miss += 1;
  }
}
if(array_search($theCity, $cities)){//q は p\_1, p\_2, …, p\_N のいずれか 1 つに一致する文字列
}else{
  $output .= "q は p\_1, p\_2, …, p\_N のいずれか 1 つに一致する文字列でなければなりません". "<br>";
  $miss += 1;
}
if($theHour >= 0 && $theHour <= 23 && $theMinute >= 0 && $theMinute <= 59){
}else{
  $output .= "t は 24 時間制で実際に存在する時刻でなければなりません". "<br>";
  $miss += 1;
}

if($miss == 0){//条件を満たしている
  $result = array_search($theCity, $cities);
  $timeDiff = $timeDiffs[$result];//対象国と世界標準時間との差
  
  $theWldH = $theHour - $timeDiff;
  $theWldTime = $theWldH.":".$theMinute;//世界標準時間
  // echo $theWldTime;
  
  $citiesTime = array();
  for($i = 0; $i < $n; $i++){//標準時間と基準とした各国の時間
    $eachCountriesHour = $theWldH + $timeDiffs[$i];//Hour
    if($eachCountriesHour < 0){
      $eachCountriesHour = 24 + $eachCountriesHour;
    }
    elseif($eachCountriesHour >24){
      $eachCountriesHour = $eachCountriesHour - 24;
    }elseif($eachCountriesHour == 24){
      $eachCountriesHour = 00;
    }
    $eachCountriesTime = $eachCountriesHour. ":" . $theMinute;//Hour & Minute
    array_push($citiesTime, $eachCountriesTime);
  }
  // print_r($citiesTime);
  
  foreach($citiesTime as $key => $val){
    echo $val . "<br>";
  }
}else{
  echo $output;
}


?>

</body>
</html>