<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>C034:先生の宿題</title>
</head>
<body>
<h1>C034:先生の宿題</h1>
<?php

$c = -1;
while($c <0 || $c > 9){
  $a = rand(1,9);
  $op = array("-", "+");
  $op = $op[rand(0,1)];
  $b = rand(1,9);
  
  switch($op){
    case "+":
      $c = $a + $b;
      break;
    case "-":
      $c = $a - $b;
      break;
  }
}

$x = rand(0,2);

switch($x){
  case 0:
    $output = "x ". $op. " ". $b. " = ". $c;
    $answer = $a;
    break; 
  case 1:
    $output = $a. " ". $op. " x  = ". $c;
    $answer = $b;
    break; 
  case 2:
    $output = $a. " ". $op. " ". $b. " = x";
    $answer = $c;
    break; 
}

$output .= "<br> $answer";

echo $output;




?>
  
</body>
</html>