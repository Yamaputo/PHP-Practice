<?php

//case1
$_POST['count'] = 5;
$_POST[0] = 'Sato';
$_POST[1] = 'Goto';
$_POST[2] = 'Diego';
$_POST[3] = 'Susan';
$_POST[4] = 'Mason';

//case1の出力結果を回答してください。

$count = $_POST['count'];

$array = array();

for( $i=0; $i<$count; $i++ ){
    $array[$i] = $_POST[$i]; 
}

if( $count >= 1 && $count <= 20 ){

    echo 'Hello ';

    for( $i=0; $i<=$count; $i++ ){

        echo $array[$i];

        if( $i+1 < $count){
            echo ',';

        }else if( $i == $count ){
            echo '.';

        }

    }

}

?>