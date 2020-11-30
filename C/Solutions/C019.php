<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>C019</title>
<style>

</style>
</head>
<body>

<h1>C019:完全数とほぼ完全数</h1>

<?php

$q = $_POST['q'];
$nums = $_POST['nums'];

$num = explode(' ', $nums);

echo "<h2>結果</h2>";
for($i = 0; $i < $q; $i++){
  ${'sum'.$i} = 0;
  $targetNum = intval($num[$i], 10);
  for($d = 1; $d < $targetNum; $d++){
    if( $targetNum % $d == 0){
      ${'sum'.$i} += $d;
    }
  }
  // echo $num[$i];

  if($targetNum === ${'sum'.$i}){
    echo "perfect!" . "<br>" . PHP_EOL;
  }elseif(($targetNum - 1) === ${'sum'.$i}){
    echo "nearly!" . "<br>" . PHP_EOL;
  }else{
    echo "neither" . "<br>" . PHP_EOL;
  }
}

echo "<br>";

?>

<form method="post" action="">
整数の数を入力してください！
<br>
<input type="text" name="q" placeholder="ex: 4" value="<?php echo $q ;?>">
<br>
整数を半角スペース区切り入力してください
<br>
<input type="text" name="nums" placeholder="ex: 5 10 30 12" value="<?php echo $nums ;?>">
<br>
<input type="submit" value="送信">
</form>

</body>
</html>