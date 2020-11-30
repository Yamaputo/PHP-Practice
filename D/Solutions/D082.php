<?php

$one = "apple";

$two = "elephant";

$one_end = substr($one, -1);
$two_first = substr($two, 0, 1);
$two_end = substr($two, -1);

if ($one_end == "n" or $two_end == "n") {
  echo "nで終わる言葉はNGです。";
}
elseif ($one_end == $two_first){
  echo "OK";
}
else {
  echo "NG";
}

?>