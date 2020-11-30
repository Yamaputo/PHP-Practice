<?php

$trump = array("J","J","Q","Q","K","K");

$key = array_rand($trump,2);

$result =$trump[$key[0]].$trump[$key[1]];

if ($result =="JJ")
{
  
  $trump = array("J","Q","Q","K","K");

  $key = array_rand($trump,2);

  echo $result =$trump[$key[0]].$trump[$key[1]].PHP_EOL;
}
else
{
  echo $result.PHP_EOL;
}

?>