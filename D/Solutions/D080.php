<!DOCTYPE>
<html>
<head>
<meta charset="utf-8">
<title>D080飲み会の幹事</title>
</head>
<body>
<h1 style="font-size: 35pt; font-weight: bold; color: red;">飲み会費用</h1>
<h2 style="color: blue;">飲み会の費用は"n（飲み放題あり）＿（半角スペース）m（飲み放題なし）"のフォーマットで入力してください。</h2>
<p style="color: blue;">以下の条件も満たしてください。</p>
<ul style="color: blue;">
  <li>n, m は整数</li>
  <li>1 ≦ n ≦ 100</li>
  <li>1 ≦ m ≦ 100</li>
</ul>
<?php

$i ="10 1";

$i = explode(" ", $i);

if (preg_match('/^[0-9]+$/', $i[0]) == 1 && preg_match('/^[0-9]+$/', $i[1]) == 1 && 1 <= $i[0] && $i[0] <= 100 && 1 <= $i[1] && $i[1] <= 100)
{
  $amount = $i[0]*6000 + $i[1]*4000;
  echo "飲み会の費用は". $amount . "円です。" .PHP_EOL;
}
else
{
  echo "正しく入力してください。" .PHP_EOL;
}

?>
</body>
</html>