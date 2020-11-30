<?php
$n=6; 
$m=3;
$k=6;
$a=[1,3,5];

for($i=0;$i<$k;$i++){
    foreach($a as $key=>$val){
        while(true){
            if(in_array($val+1,$a,true)){
                $val++;
            }else{
                $val++;
            break;
            }
        }
        if($val%$n!==0){
            $a[$key]=$val%$n;
        }else{
            $a[$key]=$val;
        }
    }
}
foreach($a as $val){
    echo $val;
    echo PHP_EOL;
}


?>