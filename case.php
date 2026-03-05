<?php
$i = mt_rand(0,2);
echo "Numero: " . $i . "<br>";
switch ($i) {
    case 0:
        echo "i eh igual a 0";
		break;
    case 1:
        echo "i eh igual a 1";
		break;
    case 2:
        echo "i eh igual a 2";
		break;
}
?>