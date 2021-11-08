..<?php
//Funções nativas do PHP para tarefas matemáticas

$número = 9.3;

echo ceil($número) . "\n"; //arredonda o valor para cima, para um inteiro

echo floor($número) . "\n"; //arredonda o valor para baixo, para um inteiro

echo round($número) . "\n"; //arrendoda com base na fracao. EX: (.0 .4 -> para baixo) (.5 .9 -> para cima). EX: 9.3 vira 9

echo rand(0, 100) . "\n"; //gera um valor aleatório, começa com 0 e vai até 100

echo sqrt(25) . "\n"; //função raiz quadrada

?>