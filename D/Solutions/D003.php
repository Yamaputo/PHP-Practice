<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D002</title>
<style>
  h1 {
    color: #9999FF;
  }
</style>
</head>
<body>
<h1>D002:値の代入と出力</h1>
<?php

//case1
$_POST['x'] = 5;

//case2
// $_POST['x'] = 5;

//case1,2の出力結果を回答してください。

//if文・・・条件が真の場合と偽の場合
//for文・・・条件を満たしている場合は処理を繰り返す

$x = $_POST['x'];

if( $x >= 1 && $x <= 100 ){

	for( $i=1; $i<=9; $i++ ){//(初期値;条件;1ループ後の処理)

		$num = $x * $i;//$numに5が代入されている

		echo $num;//5を出力 10 15 20 25 30 35 40 45

		if( $i < 9){
			echo ' ';

		}else if( $i == 9 ){
			echo '<br>';

		}

	}

}


?>

</body>
</html>