<?php
//Funções nativas do PHP para manipulação de strings
//STRINGS são arrays de caracteres e começam pela posição 0
//strtolower, strtoupper, strlen, str_replace, substr, ucfirst

//strtolower -> para maiúscula
$string = "Hello World";
echo $string . "\n";
echo strtolower($string) . "\n";

//strtolower -> para maiúscula
echo strtoupper($string) . "\n";

//ucfirst -> primeira maiúscula
$string2 = "hi";
echo ucfirst($string2) . "\n";

//strlen -> conta caracteres da string
echo strlen($string) . "\n";

//str_replace -> substitui uma cadeia de caracteres de uma string, essa função é case sensitive (distingui letras maiúsculas de maiúscula)
echo str_replace("World", "Brazil", $string) . "\n";
echo str_replace(".", ",", 2.50) . "\n"; //substitui o ponto ( . ) do número '2.50' por vírgula (,)

//substr -> copiar determinada parte de uma string
$string3 = "Bom Dia!" ;
        //0,1,2,3,4,5,6,7 -> posição dos caracteres da cadeia de caracteres "Bom Dia!"
echo substr($string3, 4, 3 ) . "\n"; //variável ($string3) que está a os caracteres "Bom Dia!", começa na posição 4 da cadeia de caracteres e pega 3 caracteres da mesma

?>