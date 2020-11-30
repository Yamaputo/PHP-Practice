<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>C025</title>
<style>

</style>
</head>
<body>

<h1>C025:ファックスの用紙回収</h1>

<?php

//入力値（一度に運べる紙の枚数、ファックスが届いた回数、（何時、何分、何枚のファックス））
$n = 5;
$m = 11;
$f_1 = "1 10 1";
$f_2 = "1 20 1";
$f_3 = "1 30 1";
$f_4 = "1 40 1";
$f_5 = "1 50 1";
$f_6 = "2 10 1";
$f_7 = "2 20 2";
$f_8 = "2 30 3";
$f_9 = "2 40 4";
$f_10 = "2 50 5";
$f_11 = "3 50 11";

//0時〜23時の配列
$array = array(
  "0" => array(),
  "1" => array(), 
  "2" => array(), 
  "3" => array(), 
  "4" => array(), 
  "5" => array(), 
  "6" => array(), 
  "7" => array(), 
  "8" => array(), 
  "9" => array(),
  "10" => array(), 
  "11" => array(), 
  "12" => array(), 
  "13" => array(), 
  "14" => array(), 
  "15" => array(), 
  "16" => array(), 
  "17" => array(), 
  "18" => array(),  
  "19" => array(),  
  "20" => array(),  
  "21" => array(),  
  "22" => array(),  
  "23" => array(),  
  );
  
//f_1~f_11までの値を配列にいれる
for($i = 1; $i <= $m; $i++){
  ${'f_'.$i} = explode(" ", ${'f_'.$i});
}

//届いた時間ごとにファックスの枚数を格納
for($i = 1; $i <= $m; $i++){
  $hour = ${'f_'.$i}[0];
  $paperNum = ${'f_'.$i}[2];
  array_push($array[$hour], $paperNum);
}


//届いた時間ごとのファックスの枚数を合計　array_sum関数
//時間ごと（0時〜23時）の移動回数を足す
$carryNum = 0;
foreach($array as $key => $val){
  $subtotal = array_sum($val);
  $carryNum += ceil($subtotal / $n);
}

echo "ファックス機に". $carryNum ."回取りに行く必要がありあます。";
?>

</body>
</html>