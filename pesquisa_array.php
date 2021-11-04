<?php
//pesquisa em array utilizando as funções/métodos: 
//in_array() -> retorna true ou false para a existência do que está sendo procurado, se existir o que está sendo procurado no array retorna true(1), senão false(vazio)
//array_search() -> retorna o índice/posição do valor pesquisado, caso ele exista

//pesquisa em array simples
$frutas = ['banana', 'maça', 'uva', 'morango'];

print_r($frutas);

echo in_array('maça', $frutas); //o in_array exibe o valor procurado no array, e depois exibe o valor 'maça' procurado no array $frutas
echo "\n";

$existe = in_array('morango', $frutas); 
//OBS: variáveis que contêm valor booleano não precisam ser testadas, porque os seus valores (true ou false) já são considerados retornos lógicos para tomada de decisão, então não precisa testar.

if($existe) //true ou false
{
    echo "\no valor existe no array";
}

else
{
    echo "\no valor não existe no array";
}

echo "\n";

echo array_search('uva', $frutas);

echo "\n";

//pesquisa em arrays multidimensionais
//$lista_coisas['frutas'] = array('uva', 'banana', 'maça', 'morango');
$lista_coisas = [
                'frutas' => $frutas,
              //'frutas' => ['banana', 'maça', 'uva', 'morango'] ou pode fazer assim para colocar o array $frutas dentro do array $lista_coisas
                'pessoas' => ['joao' , 'maria']
                ];


//pesquisando com in_array
echo in_array('uva', $lista_coisas['frutas']); //pesquisa 'uva' dentro do array $lista_coisas que contêm o array 'frutas'
echo"\n";
echo array_search('joao', $lista_coisas['pessoas']); //pesquisa 'joao' dentro do array $lista_coisas que contêm o array 'pessoas'

?>
