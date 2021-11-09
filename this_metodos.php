<?php
//$this se refere ao objeto que "chamou" o método

class Conta
{
    public String $nome;
    public String $cpf;
    public float $saldo = 0;

    //função sacar (sem retorno/void)
    public function sacar(float $valorSacar): void
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
    //função depositar (sem retorno/void)
    public function depositar(float $valorDepositar): void
    {
        if($valorDepositar < 0)
        {
            echo "O valor precisar se maior que 0 \n";        
        }
        else
        {
            $this->saldo += $valorDepositar;
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


$terceiraConta = new Conta();
$terceiraConta -> nome = "Maria";
$terceiraConta -> cpf = "333.333.444-55";
$terceiraConta -> saldo = 3000;

var_dump($terceiraConta);
$terceiraConta->sacar(500);
$terceiraConta->depositar(2000);
var_dump($terceiraConta);

?>