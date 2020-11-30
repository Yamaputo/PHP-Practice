<?php
$n=7;
$a=array(
    "go to blank page",
    "go to nkah",
    "use the back button",
    "go to gi",
    "go to in",
    "go to nkah",
    "use the back button"
);
$array=array();
foreach($a as $key => $val){
    // echo $key;//チェック
    if($key == 0){
        echo mb_substr(current($a),6) . "<br>";
        continue;
    }
    $gooruse=mb_substr($val,0,3);
    if($gooruse == "go "){
        for($i=0;$i<$key;$i++){
            if($i==0){
                reset($a);
            }
            next($a);
        }
        echo mb_substr(current($a), 6) . "<br>";
    }elseif($gooruse == "use"){
        echo mb_substr(prev($a), 6) . "<br>";
    }
}
//約45分
//内部ポインタの移動だけで出来るかと踏んでいたが、一筋縄ではいかなかった。アイデアが思いついたのでよかった。goの時は$key回nextで内部ポインタを移動させることで毎回ループが発生するが、解けた。
//内部ポインタを指定した所まで持っていってくれる関数があれば便利だと思う。なかったので、繰り返すしかなかった。
?>