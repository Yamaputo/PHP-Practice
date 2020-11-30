<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>C030:白にするか黒にするか</title>
<style type="text/css">
  h1 {
    color: #9999FF;
  }
</style>
</head>
<body>
<h1>C030:白にするか黒にするか</h1>
<?php

$hw = "3 3";
$p1 = "1 127 250";
$p2 = "1 210";
$p3 = "1000 127 100";

$hw = explode(' ', $hw);

$height = $hw[0];
$width = $hw[1];

if($height >= 1 AND $height <= 400){
  if($width >= 1 AND $width <= 400){

  }else{
    echo "幅を1以上、400以下にしてください。";
  }
}else{
  echo "高さを1以上、400以下にしてください。";
}

$ps = array();
$miss = array();
$wMiss = array();
for($i = 1; $i <= $height; $i++){
  $p = explode(' ', ${'p'.$i});
  $tem = array();
  for($a = 0; $a < $width; $a++){
    if($width == count($p)){
      if($p[$a] >=0 AND $p[$a] <= 255){//$pの値が範囲内
        if($p[$a] <= 127){
          array_push($tem, 0);
        }elseif($p[$a] >= 128){
          array_push($tem, 1);
        }
      }else{//0より小さく、255より大きい
        array_push($tem, "×");
        array_push($miss, $i);
        break;
      }
    }else{//widthの指定と実際のwidthが違う場合。
      array_push($wMiss, $i);
      break;
    }
  }
  array_push($ps, $tem);
}




if($miss){//$missが入っている場合。if($miss)で配列が空かどうかの判別ができる。
  $missP = implode(",", $miss);
  $output .= "p". $missP. "のピクセルが0以上255以下になっていません。" ."<br>";
}

if($wMiss){
  $missW = implode(",", $wMiss);
  $output .= "p". $missW. "の幅が". $width. "つ分ありません" ."<br>";
}

if(empty($miss) AND empty($wMiss)){
  foreach($ps as $key => $val){//$missが空の場合
    foreach($val as $value){
      $output .=  $value. " ";
    }
    $output .= "<br>";
  }
}

echo $output;

?>  
</body>
</html>

<?php
