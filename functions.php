<?php
//funções (function)
    
//void (sem retorno)
    function exibirTexto()
    {
        echo "Hello World\n";
    }

    exibirTexto();

    //return (com retorno)
    function soma($n1, $n2)
    {
        $soma = $n1 + $n2;
        return $soma;
    }

    $resultado = soma(10, 10);
    echo "\nresultado: " . $resultado;
    echo "\nsoma: " . soma(10, 40);
    
    function calcularArea($largura, $comprimento)
    {
        $area = $largura * $comprimento;
        return $area; 
    }

    echo "\n";
    echo calcularArea(2,5);


?>