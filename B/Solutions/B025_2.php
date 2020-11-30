<?php
$n=6; 
$m=3;
$k=6;
$r=array("1"=>1,"2"=>3, "3"=>5);
$b=array();
//茂み（キー）の配列作成
for($i=1;$i<=$n;$i++){
    $b[$i]=null;
}
//ウサギ（要素）がどの茂み（キー）にいるかの配列作成
foreach($r as $rabbit => $bush){
    $b[$bush] = $rabbit;
}
print_r($b);
//ウサギのジャンプ処理
for($i=1;$i<=$k;$i++){
    for($j=1;$j<=$m;$j++){
        $cnt = 1;
        $rabbit = $j; 
        $now_bush=array_search($j, $b);
        echo $now_bush;
        for($l=1;$l<=$m;$l++){
            if(array_key_exists($now_bush - $cnt,$b)){
                if(empty($b[$now_bush - $cnt])==true){
                    $b[$now_bush - $cnt] = $rabbit;
                    $b[$now_bush] = "";
                break;
                }
            }else{
                if(empty($b[count($b) +1 - $cnt])==true){
                    $b[$b[count($b) +1 - $cnt]] = $rabbit;
                    $b[$now_bush] = "";
                break;
                }
            }
            $cnt++;
        }
    }
}

print_r($b);

?>