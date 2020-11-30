<?php
$s="++-+--+++-";
$t="+--+";
$flg=0;
$an="N0";
$copy=$s;
while($flg<100){
  $flg++;
  for($j=0;$j<10;$j++){
    $left=mb_substr($copy,$j-1,1);
    $right=mb_substr($copy,($j+1)%10,1);
    if($left=="-"&&$right=="-"){
      $a=mb_substr($t,0,1);
      $b.=$a;
    }elseif($left=="-"&&$right=="+"){
      $a=mb_substr($t,1,1);
      $b.=$a;
    }elseif($left=="+"&&$right=="-"){
      $a=mb_substr($t,2,1);
      $b.=$a;
    }elseif($left=="+"&&$right=="+"){
      $a=mb_substr($t,3,1);
      $b.=$a;
    }
  }
  $copy=$b;
  unset($b);
  // echo $copy;
  // echo "<br>";
  if($s==$copy){
    $an="YES";
  break;
  }
}
echo $an;
?>