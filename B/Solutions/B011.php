<?php
$n=17;
$m=135;
if($n>$m){
  $min_range=1;
  $max_range=$n;
  $opo_min_range=$n+1;
  $opo_max_range=$n*2;
}else{
  $min_range=$n*(ceil($m/$n)-1)+1;
  $max_range=ceil($m/$n)*$n;
  if(ceil($m/$n)%2 === 1){
    $opo_min_range=$n*ceil($m/$n)+1;
    $opo_max_range=(ceil($m/$n)+1)*$n;
  }else{
    $opo_min_range=$n*(ceil($m/$n)-2)+1;
    $opo_max_range=$n*(ceil($m/$n)-1);
  }
}
$this_binder=range($min_range, $max_range);
$opo_binder=array_reverse(range($opo_min_range, $opo_max_range));
$key=array_search($m, $this_binder);
echo $opo_binder[$key];
//バインダーの裏を裏ではなく次のバインダーにしかしていなかったので、奇数と偶数で条件分岐して次か前かを分けることでできました。
?>