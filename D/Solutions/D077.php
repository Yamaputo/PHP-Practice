<?php

$i_1 = -50;

$i_2 = 3;



if ((is_int($i_1) === FALSE) or (is_int($i_2) === FALSE)){
  echo "整数を入力してください。";
}
else{
  if ((strstr($i_1, "-") !== FALSE) or (strstr($i_1, "-") !== FALSE)){
    echo "負の整数を入力しないでください。";
  }
  else{
    echo $i_1*$i_2;
  }
}

?>