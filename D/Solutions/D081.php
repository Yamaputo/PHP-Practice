<?php

$n = 9;
$box = "44 1";

$box = explode(" ", $box);

$rest = (($box[0]*$box[1])%$n);

if ($rest == 0) {
  echo "0";
}
else {
  echo $rest;
}


?>