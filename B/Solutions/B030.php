<?php
$h=10;
$w=10;
$f1="#.#.######";
$f2="..##...###";
$f3="##.#.###.#";
$f4="#.#.#...##";
$f5="....##..#.";
$f6="...#..#...";
$f7="..#.##.###";
$f8="..#.#.#.#.";
$f9=".##...#.##";
$f10="...#..#.##";
$x=3;
$y=3;
$n=5;
$d1="R";
$d2="D";
$d3="L";
$d4="U";
$d5="R";
//フィールドのデータ
$f=array();
for($i=1;$i<=$h;$i++){
  $a=str_split(${"f".$i});
  $key=range(1,count($a));
  $a=array_combine($key,$a);
  $f[$i]=$a;
}
//方向のデータ
$d=array();
for($i=1;$i<=$n;$i++){
  $a=${"d".$i};
  $d[$i]=$a;
}
//動く操作
foreach($d as $val){
  $flg=1;
  while($flg==1){
    switch($val){
      case "U":
        if($y<=1){
          $flg=0;
        break;
        }
        $y--;
      break; 
      case "D":
        if($y>=$h){
          $flg=0;
        break;
        }
        $y++;
      break;
      case "R":
        if($x>=$w){
          $flg=0;
        break;
        }
        $x++;
      break;
      case "L":
        if($x<=1){
          $flg=0;
        break;
        }
        $x--;
      break;
    }
    if($f[$y][$x]=="."){
      $flg=0;
    }
  }
}
echo $x ." ". $y;
//1H30M
//$dの回数分ループ①の中に、以下のループ②
//②のループは、以下の二つの条件を満たした時に抜ける
//1. 上に行く時にyが1、左に行く時にxが1、下に行く時にyが$h、右に行く時にxが$w
//2. 移動後の床が土
//逆に床が氷で、方向にまだ空きがあればループする
?>