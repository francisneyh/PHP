<?php
//percorrendo arrays com estruturas de repetição

$registro = ['Título 1', 'Título 2', 'Título 3'];

//echo print_r($registro);

//WHILE
$id = 0;
while($id < 3)
{
    echo "while: " . $registro[$id] . "\n";
    $id++;
};
echo "\n\n";


//DO WHILE
$i = 0;
do
{
    echo "do while: " . $registro[$i] . "\n";
    $i++;
}while($i < 3);
echo "\n\n";


//FOR  
$j = 0;
for($i = 0; $i < 3; $i++)
{
    echo "for: " . $registro[$j] . "\n";
    $j++;
};

//while array multidimensional
echo "\n\nPERCORRENDO ARRAY MULTIDIMENSIONAL: \n";
$dimensional = array(
            array('titulo' => 'titulo 1', 'conteudo' => 'conteudo 1'),
            array('titulo' => 'titulo 2', 'conteudo' => 'conteudo 2'),
            array('titulo' => 'titulo 3', 'conteudo' => 'conteudo 3'),
            array('titulo' => 'titulo 4', 'conteudo' => 'conteudo 4')

);

//print_r($dimensional);

$k = 0;
//while($k < 3) //hard code (valor fixo no código)
echo "while array multidimensional: \n";
$l = 0;
while($l < count($dimensional)) //função count(array) conta a quantidade dentro do array, controla quantidade de interações no array
{
    echo $dimensional[$l]['titulo'] . "\n"; //exibindo o titulo do array multidimensional
    echo $dimensional[$l]['conteudo'] . "\n"; //exibindo o conteudo do array multidimensional
    $l++;
};


echo "\ndo while array multidimensional: \n";
$m = 0;
do
{
    echo $dimensional[$m]['titulo'] . "\n"; //exibindo o titulo do array multidimensional
    echo $dimensional[$m]['conteudo'] . "\n"; //exibindo o conteudo do array multidimensional
    $m++;
}while($m < count($dimensional));


echo "\nfor array multidimensional: \n";
$n = 0;
for($n = 0; $n < count($dimensional); $n++)
{
    echo $dimensional[$n]['titulo'] . "\n";
    echo $dimensional[$n]['conteudo'] . "\n";
};
?>

