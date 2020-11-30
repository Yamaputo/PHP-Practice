<?php
$inside=array(500=>5,100=>7,50=>8,10=>9);
$n=4;
$buy=array(
    array("price"=>110,500=>0,100=>2,50=>0,10=>0),
    array("price"=>120,500=>1,100=>0,50=>0,10=>0),
    array("price"=>130,500=>1,100=>0,50=>0,10=>0),
    array("price"=>180,500=>1,100=>2,50=>0,10=>2)
);


foreach($buy as $key => $val){
    $change=500*$val[500]+100*$val[100]+50*$val[50]+10*$val[10]-$val["price"];
    $change=str_pad($change, 3, 0, STR_PAD_LEFT);
    $need_hundred=mb_substr($change, 0, 1);
    $need_ten=mb_substr($change, 1, 1);
    if($inside[100] >= $need_hundred){//百の位
        if($inside[50] >= 1 && $inside[10] + 5 >= $need_ten || $inside[10] >= $need_ten){//十の位
            $changeback=array(500=>0,100=>0,50=>0,10=>0);
            if($need_ten >=5 && $inside[50] >=1){
                $changeback[100] = $need_hundred;
                $changeback[50] = 1;
                $changeback[10] = $need_ten - 5;
                changeback($changeback);
            }elseif($need_ten < 5 || $inside[50] < 1){
                $changeback[100] = $need_hundred;
                $changeback[50] = 0;
                $changeback[10] = $need_ten;
                changeback($changeback);
            }
            $inside[100]=$inside[100]-$changeback[100];
            $inside[50]=$inside[50]-$changeback[50];
            $inside[10]=$inside[10]-$changeback[10];

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

function changeback($array){
    foreach($array as $val){
        echo $val . " ";
    }
    echo "<br>";
}


//書き出すこと
//逆算すること
//ブロックごとに書き出すこと
//2H
?>