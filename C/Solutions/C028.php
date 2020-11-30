<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>C028:単語テストの採点
</title>
</head>
<body>
<h1>C028:単語テストの採点</h1>
<?php

$n = 4;
$q1 = "apple apple";
$q2 = "orange olange";
$q3 = "grape glepe";
$q4 = "lemon lemon";

for($i = 1; $i <= $n; $i++){
  ${'q'.$i} = explode(" ", ${'q'.$i});
}

$points;
for($i = 1; $i <= $n; $i++){
  $lenCorrect= strlen(${'q'.$i}[0]);
  $lenAns = strlen(${'q'.$i}[1]);
  if($lenCorrect == $lenAns){
    $cnt = 0;
    for($a = 0; $a < $lenCorrect; $a++){
      $wordCorrect = ${'q'.$i}[0][$a];
      $wordAns = ${'q'.$i}[1][$a];
      if($wordCorrect != $wordAns){
        $cnt ++;
      }
    }
    if($cnt >= 2){
      $point = 0;
    } elseif($cnt == 1){
      $point = 1;
    } else {
      $point = 2;
    }
  } else {
    $point = 0;
  }
  
  $points += $point;
}

echo "点数は" . $points ."点です。";

?>
  
</body>
</html>
