<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D117:すごろくのサイコロ</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>D117:すごろくのサイコロ</h1>
<?php

$num = 7;
$dice = "1 4 5 2 3 6 4";
$dice = explode(" ",$dice);
$sum = 0;

if ($num >= 0 && $num <= 100){
  for ($i = 0; $i < $num; $i++){
    if ($dice[$i] >= 1 && $dice[$i] <= 6){
      $sum += $dice[$i];
    }else{
      $error = 1;
    }
  }
}else{
  echo "0 ≦ N ≦ 100";
}

if ($error != 1){
  echo $sum;
}else{
  echo "1 ≦ a\_i ≦ 6";
}


?>

</body>
</html>