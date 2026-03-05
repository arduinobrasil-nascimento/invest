<?php
$numero[0] = mt_rand(1, 10);
$numero[1] = mt_rand(1, 10);
$numero[2] = mt_rand(1, 10);
$numero[3] = mt_rand(1, 10);
$numero[4] = mt_rand(1, 10);

$total = $numero[0] + $numero[1] + $numero[2] + $numero[3] + $numero[4]; 
$media = $total / 5;
echo "N1: " . $numero[0];
echo "<br>";
echo "N2: " . $numero[1];
echo "<br>";
echo "N3: " . $numero[2];
echo "<br>";
echo "N4: " . $numero[3];
echo "<br>";
echo "N5: " . $numero[4];
echo "<br>";
echo "Total: " . $total;
echo "<br>";
echo "Media: " . $media;
echo "<br>";
?>