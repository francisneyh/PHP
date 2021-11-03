<?php
 /*
    Treinando PHP
 */
    //variaveis
   $name = "ney"; //string
   $idade = 30; //int
   $aposentado = false; //boolean
   $nota1 = 9.5; //float
   $nota2 = 8.1; //float
   
   
   //variável constante
   define('CONSTANTE_LAZER', 'video game');
   
   //exibe na tela variável constante
   echo "meu nome é $name e minha idade é $idade \n";
   
    //exibe na tela variável constante
   echo 'lazer = ' . CONSTANTE_LAZER;
   
   //quebra de linha \n
   echo "\n\n";
   
   //comando condicional if else
   if(9 == 10||20 >=1)
   {
     echo "verdade";   
   }
   
   else {
     echo "falso";
   }
   
   
   //praticando
   echo "\n";
   $media = ($nota1 + $nota2) / 2;
   echo "A média é: $media";
   
   
   if ($media >= 7)
   {
       print("\nAluno aprovado");
   }
   
   else
   {
        print("\nAluno reprovado");
   }
   
   define('CONSTANTE_ANIMAL', "cachorro");
   
   echo "\n\n";
   print('O melhor animal é: '. CONSTANTE_ANIMAL);
   
?>