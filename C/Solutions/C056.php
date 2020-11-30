<?php
$n=10;
$ps=60;
$a=array(
  array('id'=>1,'score'=>85, 'abs'=>3),
  array('id'=>2,'score'=>85, 'abs'=>7 ),
  array('id'=>3,'score'=>65, 'abs'=>1),
  array('id'=>4,'score'=>85, 'abs'=>5),
  array('id'=>5,'score'=>90, 'abs'=>0),
  array('id'=>6,'score'=>35, 'abs'=>14),
  array('id'=>7,'score'=>10, 'abs'=>1),
  array('id'=>8,'score'=>75, 'abs'=>1),
  array('id'=>9,'score'=>25, 'abs'=>3),
  array('id'=>10,'score'=>70, 'abs'=>5),
);
$result=array();
for($i=0;$i<$n;$i++){
  $score=$a[$i]['score']-$a[$i]['abs']*5;
  echo $score. "<br>";
  if($score>=$ps){
    array_push($result, $a[$i]['id']);
  }
}
print_r($result);
//17分掛かった
?>