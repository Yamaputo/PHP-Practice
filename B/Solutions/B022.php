<?php
$m=5;
$n=5;
$k=6;
$a=array(1,3,5,4,2,1);
$arr=array();
for($i=0;$i<=$m;$i++){
    if($i==0){
        $arr["f"]=$n;
    }else{
        $key=$i;
        $arr[$key]=0;
    }
}
// print_r($a). "<br>";
// print_r($arr);
foreach($a as $value){
    $plus=0;
    foreach($arr as $key => $val){
        if($val > 0){
            $arr[$key]=$val-1;
            $plus++;
        }
    }
    $arr[$value]=$arr[$value]+$plus;
}
print_r($arr);//チェック
$arr["f"]=0;
arsort($arr);
print_r($arr);//チェック
$high=current($arr);
$higher=array();
foreach($arr as $key => $val){
    if($high == $val){
        $higher[]=$key;
    }
}
// print_r($higher);//チェック
asort($higher);
// print_r($higher);//チェック
foreach($higher as $val){
    echo $val . "<br>";
}
?>