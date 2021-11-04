<?php
//Array
//1 - jeito de adicionar valores em um array
$lista[1] = 1;
$lista[2] = 2;
$lista[3] = 3;
$lista[4] = 4;

//ARRAYS SEQUENCIAIS(NÚMERICOS) - Os índices do array são colocados automaticamente e são sequenciais
$lista_frutas = array('banana', 'morango', 'uva', 'maça', 'abacate'); //2 - jeito de adicionar valores em um array
$array = ['dog', 'cat', 'bird', 30, 9.1]; //3 - jeito de adicionar valores em um array
$lista_frutas[] = 'abacaxi'; //atribui novos dados a um array

var_dump($lista_frutas); //para debug, para entender o que está vindo de um determinado array. O var_dump mostra o índice(posição), tipo de dados e quantidade de caracteres, conteúdo do array.
echo "\n";
print_r($lista_frutas); //para debug, para entender o que está vindo de um determinado array. O print_r mostra o índice(posição) e conteúdo do array.


var_dump($lista);
echo "\n";

var_dump($array);
echo "\n";

echo $lista_frutas[1]; //exibe um único valor de um array que está em determinada posição
echo "\n";



//ARRAYS ASSOCIATIVOS - Os índices são colocados manualmente e podem ser associados a um item (=>)
$array_associativo = ['b' => 'banana', 
                      'm' => 'maça',
                       1 => 'uva'];

$array_associativo['w'] = 'abacaxi'; //adiciona valor e associa um índice ao valor de um array

var_dump($array_associativo); 
echo "\n";
echo $array_associativo[1];  //exibe um único valor de um array que está em determinada posição
echo "\n";
echo $array_associativo['w'];  //exibe um único valor de um array que está em determinada posição

?>