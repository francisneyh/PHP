<?php
//criar classe
class Conta
{
    public String $cpf;
    public String $nome;
    public float $saldo;
}
//criando um objeto/instancia de um classe e inserindo valores nos atributos
$primeiraConta = new Conta();
$primeiraConta -> saldo = 200;
$primeiraConta -> cpf = '111.222.333-44';
$primeiraConta -> nome = "Maria";

var_dump($primeiraConta);
//print_r($primeiraConta);

class Pessoa 
{
    public string $nome;
    public $sobrenome;
    public int $rg;
    public string $cpf;

}
$pessoa1 = new Pessoa();
$pessoa1 -> nome = 'Ney';
$pessoa1 -> sobrenome = 'Henrique';
$pessoa1 -> rg = '11222333';
$pessoa1 -> cpg = '111.222.333-44';

var_dump($pessoa1);

class Pet
{
    public string $nomePet;
    public string $raca;
    public int $idade;
    public string $nomeProprietario;
}
$pet1 = new Pet();
$pet1 -> nomePet = 'Sofia';
$pet1 -> raca = 'SRD';
$pet1 -> idade = 7;
$pet1 -> nomeProprietario = 'Ney';

var_dump($pet1);

?>