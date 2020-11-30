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

// case1
$_POST['x'] = 10;
$_POST['y'] = 20;

//case2
//$_POST['x'] = 7;
//$_POST['y'] = 7;

$x = $_POST['x'];
$y = $_POST['y'];

if($x < $y){//条件1
	echo $y;//条件が真の場合

}else if($x > $y){//条件1が偽の場合、条件2
  echo $x;//条件2が真の場合

}

else{//条件1と2が偽の場合
	echo 'eql';

}


?>

</body>
</html>