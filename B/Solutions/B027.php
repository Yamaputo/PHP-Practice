<?php
$h=2;
$w=2;
$p=2;
$t1="1 2";
$t2="2 1";
$n=4;
$s1="1 1 2 1";
$s2="1 1 1 2";
$s3="1 1 2 2";
$s4="1 2 2 1";
//トランプの情報
$t=array();
for($i=1;$i<=$h;$i++){
  $a=explode(" ",${"t".$i});
  $key=range(1,count($a));
  $a=array_combine($key,$a);
  $t[$i]=$a;
}
//捲ったデータの配列
$s=array();
for($i=1;$i<=$n;$i++){
  $a=explode(" ",${"s".$i});
  $key=range(1,count($a));
  $a=array_combine($key,$a);
  $s[$i]=$a;
}
//プレイヤーごとの配列
$count=array();
for($i=1;$i<=$p;$i++){
  $count[$i]=0;
}
//結果を入れていく
$py=1;
foreach($s as $val){
  while($py>$p){
    $py=1;
  }
  $pk1=$t[$val[1]][$val[2]];
  $pk2=$t[$val[3]][$val[4]];
  if($pk1==$pk2){//同じの引いた場合
    $t[$val[1]][$val[2]]="";
    $t[$val[3]][$val[4]]="";
    $count[$py]=$count[$py]+2;
  }else{//違うの引いた場合
    $py++;
  }
}
//結果表示
foreach($count as $val){
  echo $val;
  echo "<br>";
}
//45分
?>