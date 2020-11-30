<?php

$data = "20 20";

$data = explode(" ", $data);


$HP = $data[1] - $data[0];

if ($HP > 0)
{
  echo $HP;
}
else
{
  echo "No";
}

?>
