<?php
//operadores de incremento e decremento
$x = 10;
$y = 5;
$z = 2;
$w = 20;

echo "valor x: $x, valor y: $y";
echo "\nincremento primeiro de x $x: " . ++$x;
echo "\nincremento depois de y $y:  " . $y++;
echo "\nantes não exibiu o incremento de y pois o incremento é exibido depois: $y";

echo "\n\n";


echo "valor z: $z, valor w: $w";
echo "\ndecremento primeiro de z $z: " . --$z;
echo "\ndecremento depois de w $w:  " . $w--;
echo "\nantes não exibiu o decremento w pois o decremento é exibido depois: $w";
 
?>