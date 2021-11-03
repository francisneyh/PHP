<?php
    $valor1 = 1;
    $valor2 = (float) $valor1;
    
    $variavel = '30';
    $variavel_antiga = 100.55;
    $variavel_nova = (int) $variavel_antiga;
    $variavel_string = (string) $variavel_antiga;
    $variavel_boolean = (boolean) $variavel;
    
    
    echo gettype($valor1);
    echo "\n";
    echo gettype($valor2);
    echo "\n";

    echo gettype($variavel);
    
    echo "\n\nCONVERSÕES (CASTING/SETANDO) DE TIPOS DE VARIÁVEIS\n\n";
    
    echo $variavel_antiga . ' -> ' . gettype($variavel_antiga);
    echo "\n";
    echo $variavel_nova . ' -> ' . gettype($variavel_nova);
    echo "\n";
    echo $variavel_string . ' -> ' . gettype($variavel_string);
    echo "\n";
    echo $variavel_boolean . ' -> ' . gettype($variavel_boolean);
?>