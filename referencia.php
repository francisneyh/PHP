<?php
    //refêrência de um objeto
    $a = 2; //valor da variável a
    $b = $a; //variável b recebendo o valor da variável a
    $b++; //valor da variável b incrementada

    echo "valor da variável a: $a\n";
    echo "valor da variável a incrementada em b: $b\n\n"; 

    var_dump($a);
    var_dump($b);

    //criando uma classe
    class Numero
    {
        public int $valor; //criando atributo
        
    }
    $n1 = new Numero(); //atribuindo uma instâmcia de uma classe, a  palavra new é utilizada para criar um objeto, e devolve o endereço dele
    $n1 -> valor = 100; //inserindo valor no atributo

    echo "\nValor do objeto n1:\n";
    var_dump($n1); //exibindo valor do objeto e seu tipo

    //TREINANDO REFERÊNCIA DE UM OBJETO/INSTÂNCIA ($n1) DE UMA CLASSE - ENDEREÇO DE UM OBJETO, Este endereço é armazenado em uma variável, e através desta variável podemos acessar o objeto e seus atributos
    $c = $n1; //$c recebe o objeto $n1;
    $c -> valor = 200; 
    echo "\n\nValor da variável c referenciando o objeto n1\n";
    var_dump($c); //exibe que o valor do objeto $n1 referenciado (endereço) foi alterado, possuem o mesmo endereço pois é o mesmo só que o objeto $n1 está sendo referenciado (endereço) pela variável $c

    ?>