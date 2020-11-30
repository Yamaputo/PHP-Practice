<?php
$num=60;
$n1="B 6 5";
$n2="W 4 6";
$n3="B 3 4";
$n4="W 4 3";
$n5="B 3 5";
$n6="W 6 6";
$n7="B 5 6";
$n8="W 2 6";
$n9="B 2 5";
$n10="W 1 6";
$n11="B 2 4";
$n12="W 7 6";
$n13="B 7 5";
$n14="W 6 4";
$n15="B 5 3";
$n16="W 6 3";
$n17="B 6 2";
$n18="W 4 2";
$n19="B 3 2";
$n20="W 2 3";
$n21="B 3 6";
$n22="W 3 7";
$n23="B 4 7";
$n24="W 5 7";
$n25="B 7 7";
$n26="W 6 7";
$n27="B 5 8";
$n28="W 4 8";
$n29="B 3 8";
$n30="W 2 8";
$n31="B 2 7";
$n32="W 1 7";
$n33="B 1 8";
$n34="W 7 8";
$n35="B 6 8";
$n36="W 8 7";
$n37="B 8 6";
$n38="W 8 4";
$n39="B 8 5";
$n40="W 8 8";
$n41="B 8 3";
$n42="W 5 2";
$n43="B 3 3";
$n44="W 7 4";
$n45="B 7 3";
$n46="W 7 2";
$n47="B 8 2";
$n48="W 7 1";
$n49="B 8 1";
$n50="W 2 2";
$n51="B 1 5";
$n52="W 1 4";
$n53="B 1 3";
$n54="W 1 2";
$n55="B 6 1";
$n56="W 5 1";
$n57="B 4 1";
$n58="W 3 1";
$n59="B 2 1";
$n60="W 1 1";
$a=array();
for($i=1;$i<=8;$i++){
  for($j=1;$j<=8;$j++){
    $a[$i][$j]="";
  }
}
for($i=1;$i<=$num;$i++){
  $b=explode(" ",${"n".$i});
  $koma=$b[0];
  $x=$b[1];
  $y=$b[2];
  $a[$x][$y]=$koma;
  $opp= $koma == "W" ? "B" : "W";
  echo $opp;
  //上
  if($y>=3){
    $cnt=1;
    if($a[$x][$y-1]==$opp){
      while($y-1-$cnt>0){
        if($a[$x][$y-1-$cnt] == $opp){//上が相手の場合
          $cnt++;
          continue;
        }elseif($a[$x][$y-1-$cnt] == $koma){//上が自分の場合
          for($j=1;$j<=$cnt;$j++){
            $a[$x][$y-$j]=$koma;
          }
        break;
        }else{//上が駒なしの場合
        break;
        }
      }
    }
  }
  //右上
  if($x<=6&&$y>=3){
    $cnt=1;
    if($a[$x+1][$y-1]==$opp){
      while($y-1-$cnt>0 && $x+1+$cnt<9){
        if($a[$x+1+$cnt][$y-1-$cnt] == $opp){//右上が相手の場合
          $cnt++;
          continue;
        }elseif($a[$x+1+$cnt][$y-1-$cnt] == $koma){//右上が自分の場合
          for($j=1;$j<=$cnt;$j++){
            $a[$x+$j][$y-$j]=$koma;
          }
        break;
        }else{//右上が駒なしの場合
        break;
        }
      }
    }
  }
  //右
  if($x<=6){
    $cnt=1;
    if($a[$x+1][$y]==$opp){
      while($x+1+$cnt<9){
        if($a[$x+1+$cnt][$y] == $opp){//右が相手の場合
          $cnt++;
          continue;
        }elseif($a[$x+1+$cnt][$y] == $koma){//右が自分の場合
          for($j=1;$j<=$cnt;$j++){
            $a[$x+$j][$y]=$koma;
          }
        break;
        }else{//右が駒なしの場合
        break;
        }
      }
    }
  }
  //右下
  if($x<=6&&$y<=6){
    $cnt=1;
    if($a[$x+1][$y+1]==$opp){
      while($y+1+$cnt>9 && $x+1+$cnt<9){
        if($a[$x+1+$cnt][$y+1+$cnt] == $opp){//右下が相手の場合
          $cnt++;
          continue;
        }elseif($a[$x+1+$cnt][$y+1+$cnt] == $koma){//右下が自分の場合
          for($j=1;$j<=$cnt;$j++){
            $a[$x+$j][$y+$j]=$koma;
          }
        break;
        }else{//右下が駒なしの場合
        break;
        }
      }
    }
  }
  //下
  if($y<=6){
    $cnt=1;
    if($a[$x][$y+1]==$opp){
      while($y+1+$cnt>9){
        if($a[$x][$y+1+$cnt] == $opp){//下が相手の場合
          $cnt++;
          continue;
        }elseif($a[$x][$y+1+$cnt] == $koma){//下が自分の場合
          for($j=1;$j<=$cnt;$j++){
            $a[$x][$y+$j]=$koma;
          }
        break;
        }else{//下が駒なしの場合
        break;
        }
      }
    }
  }
  //左下
  if($x>=3&&$y<=6){
    $cnt=1;
    if($a[$x-1][$y+1]==$opp){
      while($y+1+$cnt>9 && $x-1-$cnt>0){
        if($a[$x-1-$cnt][$y+1+$cnt] == $opp){//左下が相手の場合
          $cnt++;
          continue;
        }elseif($a[$x-1-$cnt][$y+1+$cnt] == $koma){//左下が自分の場合
          for($j=1;$j<=$cnt;$j++){
            $a[$x-$j][$y+$j]=$koma;
          }
        break;
        }else{//左下が駒なしの場合
        break;
        }
      }
    }
  }
  //左
  if($x>=3){
    $cnt=1;
    if($a[$x-1][$y]==$opp){
      while($y+1+$cnt>9){
        if($a[$x-1-$cnt][$y] == $opp){//左が相手の場合
          $cnt++;
          continue;
        }elseif($a[$x-1-$cnt][$y] == $koma){//左が自分の場合
          for($j=1;$j<=$cnt;$j++){
            $a[$x-$j][$y]=$koma;
          }
        break;
        }else{//左が駒なしの場合
        break;
        }
      }
    }
  }
  //左上
  if($x>=3&&$y>=3){
    $cnt=1;
    if($a[$x-1][$y-1]==$opp){
      while($y-1-$cnt>0 && $x-1-$cnt>0){
        if($a[$x-1-$cnt][$y-1-$cnt] == $opp){//左上が相手の場合
          $cnt++;
          continue;
        }elseif($a[$x-1-$cnt][$y-1-$cnt] == $koma){//左上が自分の場合
          for($j=1;$j<=$cnt;$j++){
            $a[$x-$j][$y-$j]=$koma;
          }
        break;
        }else{//左上が駒なしの場合
        break;
        }
      }
    }
  }
}
print_r($a);
?>