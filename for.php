<?php

for ($i = 0; $i <= 4; $i++) {
    $numero[$i] = mt_rand(1, 10); }

for ($i = 0; $i <= 4; $i++) {
if 	($i == 0){
if ($numero[0] == $numero[1]) { $numero[1] = mt_rand(1, 10); }
if ($numero[0] == $numero[2]) { $numero[2] = mt_rand(1, 10); }
if ($numero[0] == $numero[3]) { $numero[3] = mt_rand(1, 10); }
if ($numero[0] == $numero[4]) { $numero[4] = mt_rand(1, 10); } }

if 	($i == 1){
if ($numero[1] == $numero[2]) { $numero[2] = mt_rand(1, 10); }
if ($numero[1] == $numero[3]) { $numero[3] = mt_rand(1, 10); }
if ($numero[1] == $numero[4]) { $numero[4] = mt_rand(1, 10); } }

if 	($i == 2){
if ($numero[2] == $numero[3]) { $numero[3] = mt_rand(1, 10); }
if ($numero[2] == $numero[4]) { $numero[4] = mt_rand(1, 10); } }

if 	($i == 3){
if ($numero[3] == $numero[4]) { $numero[4] = mt_rand(1, 10); } }
	}

for ($i = 0; $i <= 4; $i++) {
if 	($i == 0){
if ($numero[0] == $numero[1]) { $numero[1] = mt_rand(1, 10); }
if ($numero[0] == $numero[2]) { $numero[2] = mt_rand(1, 10); }
if ($numero[0] == $numero[3]) { $numero[3] = mt_rand(1, 10); }
if ($numero[0] == $numero[4]) { $numero[4] = mt_rand(1, 10); } }

if 	($i == 1){
if ($numero[1] == $numero[2]) { $numero[2] = mt_rand(1, 10); }
if ($numero[1] == $numero[3]) { $numero[3] = mt_rand(1, 10); }
if ($numero[1] == $numero[4]) { $numero[4] = mt_rand(1, 10); } }

if 	($i == 2){
if ($numero[2] == $numero[3]) { $numero[3] = mt_rand(1, 10); }
if ($numero[2] == $numero[4]) { $numero[4] = mt_rand(1, 10); } }

if 	($i == 3){
if ($numero[3] == $numero[4]) { $numero[4] = mt_rand(1, 10); } }
	}

echo "N1: " . $numero[0];
if ($numero[0] == 1) {  echo " - Um"; }
if ($numero[0] == 2) {  echo " - Dois"; }
if ($numero[0] == 3) {  echo " - Tres"; }
if ($numero[0] == 4) {  echo " - Quatro"; }
if ($numero[0] == 5) {  echo " - Cinco"; }
if ($numero[0] == 6) {  echo " - Sexto"; }
if ($numero[0] == 7) {  echo " - Setimo"; }
if ($numero[0] == 8) {  echo " - Oitavo"; }
if ($numero[0] == 9) {  echo " - Nono"; }
if ($numero[0] == 10) {  echo " - Dez"; }

echo "<br>";
echo "N2: " . $numero[1];
echo "<br>";
echo "N3: " . $numero[2];
echo "<br>";
echo "N4: " . $numero[3];
echo "<br>";
echo "N5: " . $numero[4];
echo "<br>";

?>