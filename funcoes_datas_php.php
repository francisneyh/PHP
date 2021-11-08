<?php
//Funções nativas do PHP para manipulação de datas

//recupera/retorna data atual/recorrente
// TOKENS -> d = dia (número), D =  dia da semana (ex: terça), m = mês, y = ano, H = hora (00 a 23), h = hora (01 a 12), i = minutos. 
//Os tokens podem ser combinados para retornar informações 
echo date('d') . "\n";

//dia/mes/ano horas:minutos 
echo date('d/m/y H:i') . "\n"; //exibe data e hora atuais do s.o que o PHP está sendo rodado - formato brasileiro//
//echo date('Y/m/d H:i'); //exibe data e hora atuais do s.o que o PHP está sendo rodado - formato americano

//exibe/retorna o timezone atual da aplicação
echo date_default_timezone_get() . "\n"; 

//atualiza/modifica o timezone da aplicação
echo date_default_timezone_set('America/Sao_Paulo') .  "\n"; //atualizando o timezone para o America/Sao_Paulo
echo date('d/m/y H:i') . "\n"; //exibe horário correto agora

echo "\n\n";

$data_inicial = '2018-04-24'; //trabalha com padrão americano (ano/mês/dia) nos sistemas computacionais 
$data_final = '2018-05-15';

//Calcular datas, para calcular datas converte essas string de data em uma timestamp
//timestamp 
//01/01/1970 -> inicio da era Unix, o calculo vai levar em consideração essa data e data que vai ser convertida para timestamp

//strtotime -> transforma/converte textos/strings em segundos no padrão americanos. PHP -> retorna em segundos
$time_inicial =  strtotime($data_inicial); 
$time_final = strtotime($data_final);

echo $data_inicial . ' - ' . $time_inicial . "\n"; //data para segundos
echo $data_final . ' - ' . $time_final . "\n"; //data para segundos
//com os segundos consegue-se efetuar cálculos

$diferenca_time = $time_final - $time_inicial; //função abs pode ser utilizada para converter de negativo para positivo, ela retorna o valor absoluto de um número -> abs($time_inicial - $time_final)
echo "diferença de segundos entre as datas inicial e final é: $diferenca_time \n"; 

//descobrir a quantidade de segundos de um dia
$segundos_dia = 24 * 60 * 60; //dia = 24 horas, hora = 60 minutos, minutos = 60 segundos
echo "um dia possui $segundos_dia segundos \n";

//cálculo de diferença de dias entra as datas
$diferenca_de_dias = $diferenca_time / $segundos_dia;
echo "diferença em dias é: $diferenca_de_dias";

?>