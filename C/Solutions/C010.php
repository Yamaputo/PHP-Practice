<?php

//case1
$_POST['a'] = 20;
$_POST['b'] = 10;
$_POST['r'] = 10;
$_POST['n'] = 3;
$_POST['xy_0'] = '25 10';
$_POST['xy_1'] = '20 15';
$_POST['xy_2'] = '70 70';


$a = $_POST['a'];
$b = $_POST['b'];
$r = $_POST['r'];
$n = $_POST['n'];

$right_rs = $r * $r;

for ($i=0; $i < $n; $i++) { 
	$xy[$i] = $_POST['xy_'.$i];
	$x[$i] = $xy[$i][0];
	$y[$i] = $xy[$i][1];

	$xa = $x[$i] - $a;
	$yb = $y[$i] - $b;
	$left_rs = $xa * $xa + $yb * $yb;

	if( $left_rs >= $right_rs ){
		echo 'silent <br>';

	}else{
		echo 'noisy <br>';

	}


}



?>