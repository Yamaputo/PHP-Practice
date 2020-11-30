<?php

$book_shell = "400 5 70";

$book_shell = explode(" ", $book_shell);

$measure = $book_shell[1]*$book_shell[2];

if($measure >= $book_shell[0]){
  echo "OK";
}
else{
  echo "NO";
}

 ?>
