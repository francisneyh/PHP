<?php
    //imposto de renda
    //IMPOSTO = 0, 7.5%, 15%, 22.5%, 27.5%

    function calcularImposto($salario)
    {
        if ($salario <= 1903.98)
        {
            $imposto = 0; //aliquota = 0
            //echo "\ninsento";
        }

        else if ($salario >= 1903.99 and $salario <= 2826.65) 
        {
            $imposto = ($salario * 7.5) / 100; //aliquota = 7.5
           //echo "\nImposto: $imposto";
        }

        else if ($salario >= 2826.66 && $salario <= 3751.05) 
        {
            $imposto = ($salario * 15) / 100; //aliquota = 15
            //echo "\nImposto: $imposto";
        }

        else if ($salario >= 3751.06 and $salario <= 4666.68) 
        {
            $imposto = ($salario * 22.5) / 100; //aliquota = 22.5
           //echo "\nImposto: $imposto";
        }

        else 
        {
            $imposto = ($salario * 27.5) / 100; //aliquota = 27.5
           //echo "\nImposto: $imposto";
        }   
        
        return $imposto;
    }
    
    echo calcularImposto(5000);


    /* Ou pode fazer a função para inserir o valor do salário e a alíquota
     if ($salario <= 1903.98)
        {
            $imposto = 0; //aliquota = 0
            //echo "\ninsento";
        }

        else if ($salario >= 1903.99 and $salario <= 2826.65) 
        {
            $imposto = ($salario * $aliquota) / 100; //aliquota = 7.5
           //echo "\nImposto: $imposto";
        }

        else if ($salario >= 2826.66 && $salario <= 3751.05) 
        {
            $imposto = ($salario * $aliquota) / 100; //aliquota = 15
            //echo "\nImposto: $imposto";
        }

        else if ($salario >= 3751.06 and $salario <= 4666.68) 
        {
            $imposto = ($salario * $aliquota) / 100; //aliquota = 22.5
           //echo "\nImposto: $imposto";
        }

        else 
        {
            $imposto = ($salario * $aliquota) / 100; //aliquota = 27.5
           //echo "\nImposto: $imposto";
        }   
        
        return $imposto;
    }
    
    echo calcularImposto(5000, 27.5);
    */
?>