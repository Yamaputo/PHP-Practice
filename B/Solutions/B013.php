<?php
$a=10;
$b=10;
$c=10;  
$n=3;  
$arr=array(
  array('h'=>8, 'm'=>5,),  
  array('h'=>8, 'm'=>15,),  
  array('h'=>8, 'm'=>25,),  
  array('h'=>8, 'm'=>35,),  
  array('h'=>8, 'm'=>45,),  
  array('h'=>8, 'm'=>55,));
foreach($arr as $key => $val){
  $arr[$key]['m']=str_pad($arr[$key]['m'], 2, 0, STR_PAD_LEFT);
}
$hour=8;
$minute=59;
$minute=$minute-$c;
if($minute <0){
  $hour-=1;
  $minute=60+$minute;
}
$minute=$minute-$b;
if($minute <0){
  $hour-=1;
  $minute=60+$minute;
}
$minute=str_pad($minute, 2, 0, STR_PAD_LEFT);
$arr=array_reverse($arr);
foreach($arr as $key => $val){
  $train=$arr[$key]['h'].$arr[$key]['m'];
  $time=$hour.$minute;
  if($train<=$time){
    $hour=$arr[$key]['h'];
    $minute=$arr[$key]['m'];
  break;
  }
}
$minute=$minute-$a;
if($minute <0){
  $hour-=1;
  $minute=60+$minute;
}
$hour=str_pad($hour, 2, 0, STR_PAD_LEFT);
echo $hour.":".$minute;
//1時間40分近くかかった。
?>