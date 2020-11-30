<?php

$length = "10 10 5";//改行区切りの意味がわからない

$length = explode(" ", $length);

if($length[0]== $length[1] && $length[1]== $length[2]){
  print 'YES';
}
else{
  print 'NO';
}

 ?>
