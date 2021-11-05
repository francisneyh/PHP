<?php
//foreach para percorrer array ou objetos e exibir na tela. foreach($array as $nova_variável)
    /*$array_frutas = ['uva', 'maçã', 'laranja', 'morango', 'abacaxi'];

    foreach($array_frutas as $fruta) 
    {
        echo $fruta . "\n"; //exibe o conteúdo do array

        if($fruta == 'abacaxi')
        {
            echo "\nExiste a fruta $fruta no array";
        }
    };
    
    echo "\n\n";

    //foreach para receber valor e índices do array
    $array_funcionarios = ['joao', 'maria', 'carlos'];

    foreach($array_funcionarios as $id => $funcionarios)
    {
        echo $id ." - " . $funcionarios . "\n"; //exibe o índice e o conteúdo do array
        
    };


    echo "\n\n";

    //foreach para receber valor e índices do array multidimensional
    $dimensional_funcionarios = array(
                                array('nome' => 'joao', 'salario' => 2000),
                                array('nome' => 'maria', 'salario' => 3000),
                                array('nome' => 'ze','salario' => 2500)
                                );
                                
    foreach($dimensional_funcionarios as $id => $funcionario)
    {
        echo $id ." - " . $funcionario;
        //foreach para percorrer array ou objetos e exibir na tela. foreach($array as $nova_variável)
        $array_frutas = ['uva', 'maçã', 'laranja', 'morango', 'abacaxi'];
    };

    foreach($array_frutas as $fruta) 
    {
        echo $fruta . "\n"; //exibe o conteúdo do array

        if($fruta == 'abacaxi')
        {
            echo "\nExiste a fruta $fruta no array";
        }
    };
    
    echo "\n\n";

    //foreach para receber valor e índices do array
    $array_funcionarios = ['joao', 'maria', 'carlos'];

    foreach($array_funcionarios as $id => $funcionarios)
    {
        echo $id ." - " . $funcionarios . "\n"; //exibe o índice e o conteúdo do array
        
    };


    echo "\n\n";
*/
    //foreach para receber valor e índices do array multidimensional
    $dimensional_funcionarios = array(
                                array('nome' => 'joao', 'salario' => 2000),
                                array('nome' => 'maria', 'salario' => 3000),
                                array('nome' => 'ze','salario' => 2500)
                                );
     
    //exibe no array nome e salário do funcionário                            
    foreach($dimensional_funcionarios as $id => $dimensionalFuncionario) 
    {   foreach($dimensionalFuncionario as $id2 => $valor) 
        {
            echo "$id2 - $valor\n";
        };
        //print_r($dimensionalFuncionario); //exibe o índice e o conteúdo do array
       
    };        

?>