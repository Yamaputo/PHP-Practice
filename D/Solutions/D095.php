<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D094:イヌ派かネコ派か</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>D095:ジュースの分配</h1>
<h3>何人にジュースを分けられるかな？</h3>

<?php

$juice_bottle = 500;
$cup_size = 240;

if($juice_bottle >= 100 || $juice_bottle <= 2000 || $cup_size >= 100 || $cup_size <= 2000){
  if($juice_bottle > $cup_size){
    $cups = floor($juice_bottle / $cup_size);
    echo "カップの数は". $cups . "カップです。";
  }else{
    echo "M ≦ N";
  }
}else{
  echo "100 ≦ N, M ≦ 2000";
}


?>

</body>
</html>