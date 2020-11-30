<!DOCKTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>D118:こよみの変換</title>
<style>
  h1 {
    color: #3399FF;
  }
</style>
</head>
<body>
<h1>D118:こよみの変換</h1>
<?php

$gengo = "S";
$wareki = 1;

$showa = 1925;
$heisei = 1988;

if ($gengo == "S"){
  $seireki = $showa + $wareki;
}elseif($gengo == "H") {
  $seireki = $heisei + $wareki;
}

echo $seireki;

?>

</body>
</html>