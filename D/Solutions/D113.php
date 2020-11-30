<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D113:初日の出</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>D113:初日の出</h1>
<?php

$wakeup = "1:00";
$wakeup = explode(":", $wakeup);
$h = $wakeup[0];
$m = $wakeup[1];

$cal = $h - 8;

if($cal <= 0){
  $bed = 24 + $cal;
  echo $bed .":". $m .PHP_EOL;
}else{
  $bed = $cal;
  echo $bed .":" .$m .PHP_EOL;
}

?>

</body>
</html>