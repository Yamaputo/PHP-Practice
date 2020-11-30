<?php
$inside=array(500=>1,100=>4,50=>1,10=>20);
$n=3;
$buy=array(
    array("into"=>130,500=>1,100=>0,50=>0,10=>0),
    array("into"=>150,500=>0,100=>2,50=>0,10=>0),
    array("into"=>100,500=>1,100=>0,50=>0,10=>0)
);


foreach($buy as $key => $val){
    $change=500*$val[500]+100*$val[100]+50*$val[50]+10*$val[10]-$val["into"];
    $change=str_pad($change, 3, 0, STR_PAD_LEFT);
    $need_hundred=mb_substr($change, 0, 1);
    $need_ten=mb_substr($change, 1, 1);
    if($inside[100] >= $need_hundred){//百の位
        if($inside[50] >= 1 && $inside[10] + 5 >= $need_ten || $inside[10] >= $need_ten){//十の位
            $reverse=array(500=>0,100=>0,50=>0,10=>0);
            if($need_ten >=5 && $inside[50] >=1){
                $reverse[100] = $need_hundred;
                $reverse[50] = 1;
                $reverse[10] = $need_ten - 5;
                reverse($reverse);
            }elseif($need_ten < 5 || $inside[50] < 1){
                $reverse[100] = $need_hundred;
                $reverse[50] = 0;
                $reverse[10] = $need_ten;
                reverse($reverse);
            }
            $inside[100]=$inside[100]-$reverse[100];
            $inside[50]=$inside[50]-$reverse[50];
            $inside[10]=$inside[10]-$reverse[10];

            $inside[500]=$inside[500]+$val[500];
            $inside[100]=$inside[100]+$val[100];
            $inside[50]=$inside[50]+$val[50];
            $inside[10]=$inside[10]+$val[10];
        }else{
            echo "impossible";
        break;
        }
    }else{
        echo "impossible";
    break;
    }
}

function reverse($array){
    foreach($array as $val){
        echo $val . " ";
    }
    echo "<br>";
}

?>