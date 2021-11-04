<?php
//array multidimensional (um array de arrays) - um array que aponta para outros arrays
//$lista_coisas = array();
$lista_coisas = [];

//$lista_coisas = $pessoas = ['1' => 'ney', '2' => 'kim'];
$lista_coisas['pessoas'] = array('1' => 'ney', '2' => 'kim');  //índice = pessoas, relação de itens, é array associativo por está setando índice manualmente
$lista_coisas['frutas'] = array(1 => 'banana', 2 => 'uva'); //índice = frutas, relação de itens, é array associativo por está setando índice manualmente
$lista_coisas['números'] = array(1, 2, 3); //índice = frutas, relação de itens, é array sequencial por está setando índice automaticamente, não setou o índice

//exibe os arrays contidos no array $lista_coisas
print_r($lista_coisas);

echo $lista_coisas['pessoas'][2]; //exibe um determinado valor do array pessoas
echo "\n";
echo $lista_coisas['frutas'][1]; //exibe um determinado valor do array frutas
echo "\n";
echo $lista_coisas['números'][2]; //exibe um determinado valor do array números
?>