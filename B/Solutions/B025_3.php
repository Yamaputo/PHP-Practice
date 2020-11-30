<?php
$n=6; 
$m=3;
$k=6;
$r=array("1"=>1,"2"=>3, "3"=>5);
$b=array();
//茂み（キー）の配列作成
for($i=1;$i<=$n;$i++){
    $b[$i]="";
}
//ウサギ（要素）がどの茂み（キー）にいるかの配列作成
foreach($r as $rabbit => $bush){
    $b[$bush] = $rabbit;
}
//ウサギのジャンプ処理
for($i=1;$i<=$k;$i++){
    for($j=1;$j<=$m;$j++){
        $rabbit=$j;
        $cnt=1;
        $rabbit_bush=array_search($rabbit, $b);
        for($l=1;$l<=$m;$l++){
            if(array_key_exists($rabbit_bush+$cnt, $b) && empty($b[$rabbit_bush+$cnt])){
                $b[$rabbit_bush+$cnt] = $rabbit;
                $b[$rabbit_bush] = "";
            break;
            }elseif(array_key_exists($rabbit_bush+$cnt, $b)===false && empty($b[count($b)+1-$cnt])){
                $b[count($b)+1+$cnt] = $rabbit;
                $b[$rabbit_bush] = "";
            break;
            }
            $cnt++;
        }
    }
}

for($i=1;$i<=$m;$i++){
    $key=array_search($i,$b);
    echo $b[$key] . "<br>";
}
//逆算してとく方が頭がごちゃごちゃしなくて済む。（二日）
?>