<?php

//case1

$_POST['n'] = 3;
$_POST['r'] = 5;
$_POST['q_0'] = '2 184 12';
$_POST['q_1'] = '135 169 37';
$_POST['q_2'] = '99 121 41';



$n = $_POST['n'];
$r = $_POST['r'];

for($i=0; $i<$n; $i++){
	$q[$i] = explode( ' ', $_POST['q_'.$i] );
}

$r2 = $r * 2;

for($i=0; $i<$n; $i++){
	
	$flg = 0;

	for( $j=0; $j<3; $j++ ){

		if( $r2 <= $q[$i][$j] ){
			$flg = 	1;
		}else{
			$flg = 0;
		}
	}

	if( $flg == 1 ){
		$res[] = $i;
	}
	

}

sort( $res );

foreach( $res as $key => $value ){
	echo $value;
	echo '<br>';
}

?>