<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D108:薬の効き目</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>D108:薬の効き目</h1>

<?php

$time = 5;

if($time >=1 && $time <= 24){
  if(is_int($time)){
    $num = ceil(24/$time);
    echo $num;
  }else{
    echo "t は整数";
  }
}else{
  echo "1 ≦ t ≦ 24";
}

?>

</body>
</html>