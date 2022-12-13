<?php

$numberArray = [];

$soldier = 0;

for($i=0; $i < 15; $i++){
   $num = rand(1, 100);
   if($num != $soldier){
    array_push($numberArray, $num);
    $soldier == $num;
   }else{
    $i--;
   }
}



for($i = 0; $i < count($numberArray); $i++){
    echo $numberArray[$i];
    echo '<br/>';
    echo '<br/>';
}
?>