<?php
    $n1 = 5.5;
    $n2 = 7.5;
    $n3 = 9;
    
    $media = ($n1+$n2+$n3) / 3;
    
    echo "Nota do aluno: $media \n";
    
    if ($media >= 7)
    {
        print("Aluno aprovado \n");
    
    }
    
    else if ($media < 7 and $media > 5)
    {

        print("Aluno está de recuperação\n");
    }
   
   else 
   {
       print("Aluno reprovado\n");
   }
    
?>