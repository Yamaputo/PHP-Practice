<?php
$n=6; 
$m=23;
$b_1="29 7 20 6 23 24";
$b_2="35 26 10 19 28 11";
$b_3="27 8 22 34 36 33";
$b_4="2 5 32 31 21 30";
$b_5="12 17 15 18 25 3";
$b_6="13 1 9 4 16 14";
$a="23 21 31 14 35 2 5 25 34 27 10 20 15 29 9 11 32 22 28 19 26 13";

$e=range(1,$n*$n);
$a=explode(" ",$a);
$diff=array_diff($e,$a);
// print_r($diff);
$result=0;
foreach($diff as $k => $v){
  $c=array();
  $a[]=$v;
  $b=array();
  for($i=1;$i<=$n;$i++){
    // ${"b_".$i}=explode(" ",${"b_".$i});
    $b=array_merge($b,explode(" ",${"b_".$i}));
  }
  foreach($b as $key => $val){
    $c[$val]=0;
  }
  foreach($a as $key => $val){
    $c[$val]=1;
  }
  $c=array_chunk($c,$n,TRUE);
  // print_r($c);
  // echo PHP_EOL;
  //縦のカウント
  $count=0;
  for($j=0;$j<$n;$j++){
    $cnt=0;
    for($i=0;$i<$n;$i++){
      $cnt+=current(array_slice($c[$i], $j, 1));
    }
    if($cnt==$n){
      $count++;
    }
  }
  //横のカウント
  foreach($c as $key => $val){
    $sum=array_sum($val);
    if($sum==$n){
      $count++;
    }
  }
  //斜めのカウント（左上右下）
  $cnt=0;
  for($i=0;$i<$n;$i++){
    $cnt+=current(array_slice($c[$i], $i, 1));
  }
  if($cnt==$n){
    $count++;
  }
  //斜めのカウント（右上左下）
  $cnt=0;
  for($i=0;$i<$n;$i++){
    $cnt+=current(array_slice($c[$i], $n-$i-1, 1));
  }
  if($cnt==$n){
    $count++;
  }
  // echo $count;
  if($count>$result){
    $result=$count;
  }
  array_splice($a,-1, 1);
}
echo $result;
?>