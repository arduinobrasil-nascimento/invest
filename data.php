<?php
date_default_timezone_set('America/Cuiaba');

$dtdia = date("d");
$dtmes = date("m");
$dtano = date("Y");

$hora = date("h");
$minuto = date("i");
$segundo = date("s");


echo $dtdia . "/" . $dtmes . "/" . $dtano . "<br>";
echo $hora . ":" . $minuto . ":" . $segundo;
?>