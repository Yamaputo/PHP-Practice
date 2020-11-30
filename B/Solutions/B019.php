<?php
$n=6;//辺の長さ
$k=2;//何個でまとめるか
$origin=array(//元の画像
  array(76 ,251, 15 ,224 ,89 ,129),
  array(90 ,129, 102, 161, 14, 92),
  array(78 ,180, 218, 236, 47, 25),
  array(96 ,126, 138, 37 ,59 ,202),
  array(43 ,213, 30 ,105 ,29 ,195),
  array(132, 19, 14 ,166 ,106, 16)
);
//一行をまとめた配列
$chunked=array();
foreach($origin as $val){
  $chunked[]=array_chunk($val, $k);
}
// print_r($chunked);//一チェック

//一行の平均値の配列
$ave=array();
foreach($chunked as $key => $val){
  foreach($val as $v){
    $ave[$key][]=array_sum($v)/count($v);
  }
}
// print_r($ave);//チェック

//一ピクセルの縦のループのキーを配列に
$arr=array();
$s=$n/$k;//一辺の長さ（縮小後）
$p=array();
for($x=0;$x<$s;$x++){
  $r=$k*$x;
  $rr=$r+$k-1;
  array_push($p,range($r,$rr));
}
// print_r($p);//チェッっく

// 一ピクセル分の配列として格納する
$a=array();
$i=0;
foreach($p as $key => $ar){
  for($x=0;$x<$s;$x++){
    foreach($ar as $ki){
      $a[$i][]=$ave[$ki][$x];
    }
    $i++;
  }
}
// print_r($a);//チェック

//ピクセルごとの平均値の配列
$pix_ave=array();
foreach($a as $key => $val){
  $pix_ave[$key]=floor(array_sum($val)/count($val));
}
// print_r($pix_ave);//チェック

// ピクセルとしての表示
foreach($pix_ave as $key => $val){
  if($key%$s==0 && $key!=0){
    echo "<br>";
  }
  echo $val ." ";
}
?>