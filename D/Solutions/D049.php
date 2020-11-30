<?php

$que = "dokusyonoaki";

$pos = strpos($que, "noaki");

if($pos === false)
{
  echo $que;
}
else
{
  $que = str_replace("noaki", '', $que);
  echo $que;
}

 ?>
