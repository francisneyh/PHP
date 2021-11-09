<?php
//$this se refere ao objeto que "chamou" o método

class Conta
{
    public String $nome;
    public String $cpf;
    public int $saldo;

    function sacar(int $valorSacar)
{
    if($valorSacar > $this->saldo) //$this se refere ao objeto que "chamou" o método
    {
        echo "saldo indisponivel";
        
    }
    else 
    {
        $this-> saldo -= $valorSacar; //$this se refere ao objeto que "chamou" o método
    }   
}
}

$primeiraConta = new Conta();
$primeiraConta -> nome = "Francisney";
$primeiraConta -> cpf = "777.888.999-44";
$primeiraConta -> saldo = 1200;

var_dump($primeiraConta);
var_dump($primeiraConta);

$segundaConta = new Conta();
$segundaConta -> nome = "Francisco";
$segundaConta -> cpf = "111.111.222.33";
$segundaConta -> saldo = 1800;

var_dump($segundaConta);
$segundaConta->sacar(30);
var_dump($segundaConta);


?>