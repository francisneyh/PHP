<?php
//Encapsulamento 
//Conta = deposita, saca, transfere, exibi saldo, exibi cpf, exibi nome, define nome, define cpf

class Conta
{
    private String $cpf;
    private String $nome;
    private float $saldo;

    //construtor em PHP - __construct ou nomeDaClasse (Conta)
    function __construct(string $cpf, string $nome) //inicializa (os atributos de) instância/ objeto automaticamente pelo new quando o mesmo é criado. Código que é inicializado sempre que cria uma nova conta (objeto/instância).
    {
       // echo "criando uma nova conta" . PHP_EOL;
       $this->cpf = $cpf;
       $this->nome = $nome;
       $this->saldo = 0;
    }

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

    public function exibeNome(): string //get
    {
        return $this->nome;
    }

    public function exibeCpf(): String //get
    {
        return $this->cpf;
    }

    //Agora que tem o método construtor não precisa mais definir o nome
    /*public function defineNome(String $nomeTitular): void //set
    {
        $this->nome = $nomeTitular;

    }*/

    //Agora que tem o método construtor não precisa mais definir o cpf
    /*public function defineCpf(String $cpfTitular): void //set
    {
        $this->cpf = $cpfTitular;
    }*/
}

$primeiraConta = new Conta("Francisney", "111.222.333-44");

//var_dump($primeiraConta);

//$primeiraConta->defineNome(nomeTitular: 'Francisney Henrique');
//$primeiraConta->defineCpf(cpfTitular: '111.222.333-44');
$primeiraConta->deposita(1200);
//var_dump($primeiraConta);

//echo $primeiraConta->exibeNome() . "\n";
//echo $primeiraConta->exibeCpf() . "\n";
//echo $primeiraConta->exibeSaldo();
echo $primeiraConta->exibeNome() . PHP_EOL;
echo $primeiraConta->exibeCpf() . "\n";
echo $primeiraConta->exibeSaldo() . "\n";

//print_r($primeiraConta);
var_dump($primeiraConta);

?>