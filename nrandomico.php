<?php
$numero1 = mt_rand(1, 10);
$numero2 = mt_rand(1, 10);
$numero3 = mt_rand(1, 10);
$numero4 = mt_rand(1, 10);
$numero5 = mt_rand(1, 10);

$total = $numero1 + $numero2 + $numero3 + $numero4 + $numero5;
$media = $total / 5;
echo "N1: " . $numero1;
echo "<br>";
echo "N2: " . $numero2;
echo "<br>";
echo "N3: " . $numero3;
echo "<br>";
echo "N4: " . $numero4;
echo "<br>";
echo "N5: " . $numero5;
echo "<br>";
echo "Total: " . $total;
echo "<br>";
echo "Media: " . $media;
echo "<br>";
?>