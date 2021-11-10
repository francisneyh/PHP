<?php
//Encapsulamento 
//Conta = deposita, saca, transfere, exibi saldo, exibi cpf, exibi nome, define nome, define cpf

class Conta
{
    private String $cpf;
    private String $nome;
    private float $saldo = 0;

    public function saca(float $valorSacar):void //get
    {
        if ($valorSacar > $this->saldo)
        {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSacar;
    }

    public function deposita(float $valorDepositar): void //get
    {
        if ($valorDepositar < 0)
        {
           echo "O valor precisa ser positivo";
           return; 
        }

        $this->saldo += $valorDepositar;
    }

    public function transfere(float $valorTransferir, Conta $contaDestino): void 
    {
        if ($valorTransferir > $this->saldo)
        {
            echo "Saldo indisponível";
            return;
        }

        $this->saca($valorTransferir);
        $contaDestino->deposita($valorTransferir);
    }

    public function exibeSaldo(): float //get
    {
        return $this->saldo;
    }

    public function exibeNome(): String //get
    {
        return $this->nome;
    }

    public function exibeCpf(): String //get
    {
        return $this->cpf;
    }

    public function defineNome(String $nomeTitular): void //set
    {
        $this->nome = $nomeTitular;

    }

    public function defineCpf(String $cpfTitular): void //set
    {
        $this->cpf = $cpfTitular;
    }
}
$primeiraConta = new Conta();
//var_dump($primeiraConta);

$primeiraConta->defineNome(nomeTitular: 'Francisney Henrique');
$primeiraConta->defineCpf(cpfTitular: '111.222.333-44');
$primeiraConta->deposita(1200);
//var_dump($primeiraConta);

echo $primeiraConta->exibeNome() . "\n";
echo $primeiraConta->exibeCpf();

?>