<?php
$fibonaci = 20;
$numero[0] = 0;
$numero[1] = 1;

   echo $numero[0] . "<br>";
   echo $numero[1] . "<br>";

for ($i = 2; $i <= $fibonaci; $i++){
   $numero[$i] = $numero[$i - 1] + $numero[$i - 2];
   echo $numero[$i] . "<br>"; }
?>