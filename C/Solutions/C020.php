<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>C020</title>
<style>

</style>
</head>
<body>

<h1>C020:残り物の量</h1>


<?php

$cons = $_POST['cons'];

if(!empty($cons)){
  $con = explode(' ', $cons);
  $foodBoughtKg = $con[0];
  $foodSoldPer = $con[1];
  $sideSoldPer = $con[2];

  //売れ残った生鮮食品のkg
  $foodSoldKg = $foodBoughtKg * $foodSoldPer / 100;
  $foodLeftKg = $foodBoughtKg -$foodSoldKg;
  echo "売れた生鮮食品のkg:" . $foodSoldKg . "<br>" . PHP_EOL;

  //お惣菜の売れ残り量（最終的な売れ残り量）
  $sideSoldKg = $foodLeftKg * $sideSoldPer / 100;
  echo "売れたお惣菜のkg:" . $sideSoldKg . "<br>" . PHP_EOL;
  $totalSoldKg = $foodSoldKg + $sideSoldKg; 
  echo "売れた合計のkg:" . $totalSoldKg . "<br>" . PHP_EOL;
  $totalLeftKg = $foodBoughtKg - $totalSoldKg;
  echo "<strong>" . "最終的に売れ残ったkg:" . $totalLeftKg . "<br>" . "</strong>" . PHP_EOL;

}

?>

<br>
<form method="post" action="">
仕入れたkg、生鮮食品の消化%、お惣菜の消化%を半角スペース区切りで入力してください。
<br>
<input type="text" name="cons" placeholder="ex: 1 80 40" value="<?php echo $cons ;?>">
<br>
<input type="submit" value="送信">
</form>

</body>
</html>