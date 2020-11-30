<?php

$_POST['n'] = 3;
$_POST['dp_0'] = '1 1024';
$_POST['dp_1'] = '11 2048';
$_POST['dp_2'] = '21 4196';

//case1の時、出力結果を回答してください。


$n = $_POST['n'];



for( $i =0 ; $i<$n ; $i++  ){
	$dp[$i] = explode (' ', $_POST['dp_'.$i]);
}


$sum = 0;




for( $i=0; $i<$n; $i++ ){
	if( strpos( $dp[$i][0], '3' ) != false  ){
		$res[] = round( $dp[$i][1] * 0.03 );

	}elseif( strpos( $dp[$i][0], '5' ) != false ){
		$res[] = round( $dp[$i][1] * 0.05 );		

	}else{
		$res[] = round( $dp[$i][1] * 0.01 );		

	}
}



foreach( $res as $value ){
	$sum = $sum + $value;
	
}

echo $sum;



?>