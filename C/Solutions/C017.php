<!DOCKTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<title>C017:ハイアンドロー・カードゲーム</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>C017:ハイアンドロー・カードゲーム</h1>
<?php

//カードの情報
$parent = '4 2';
$n = 3;
$c1 = '4 4';
$c2 = '3 1';
$c3 = '10 3';
//カードの情報

//カードの情報を出力
echo '<p><カード>' .'<br>';
echo '親カード：' .$parent.'<br>';
echo '小カードの数：' .$n.'<br>';
for ($i = 1; $i <= $n; $i++){
  echo '子カード'.$i .'： ' ."${'c'.$i}".'<br>';
}
//カードの情報を出力

//一番目と二番目を分割
$parent = explode(" ", $parent);
$parentFirst = $parent[0];
$parentSecond = $parent[1];

$child = array();
for ($i = 1; $i <= $n; $i++){
  $child[] = explode(" ", "${'c'.$i}");
}
//一番目と二番目を分割



echo '<br>' .'<結果>' .'<br>';
for ($i = 0; $i < $n; $i++){
  if($parentFirst > $child[$i][0]){
    $result = 'HIGH';
  }elseif ($parentFirst < $child[$i][0]){
    $result = 'LOW';
  }elseif($parentFirst = $child[$i][0]){
    if($parentSecond < $child[$i][1]){
      $result = 'HIGH';
    }else{
      $result = 'LOW';
    }
  }
  echo $result . '<br>';
}


// function firstNumberJudge(){
//   $count = 0;

//   for ($i = 1; $i <= $n; $i++){
//     if ($child[$i][0] >= 1 && $child[$i][0] <= 10){
//       $count += 1;
//     }
//   }
//   if ($count = $n){
//     return 'true';
//   }else{
//     return 'false';
//   }
// }
// $judge = judge();

// if($parent[0] >= 1 && $judge == 'true'){
//   echo 'ok';
// }

?>

</body>
</html>