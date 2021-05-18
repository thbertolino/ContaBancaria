<?php

class ContaBancaria
{
    private $banco;
    private $nomeTitular = 'Thiago';
    private $numeroAgencia;
    private $numeroConta;
    private $saldo;

    public function __construct ($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo()
    {
        return 'Seu saldo atual é: R$ '.$this->saldo;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
        return 'Deposito de R$ ' .$valor. 'realizado!';
    }

    public function sacar($valor)
    {
        $this->saldo -= $valor;
        return 'Saque de R$ ' .$valor. 'debitado!';
    }
}

$conta = new ContaBancaria(
    'Banco Inter',
    'Thiago Bertolino',
    '9999',
    '1234-56',
    100,00
);

// var_dump($conta);
echo $conta->obterSaldo();
$conta->depositar(300);
echo '<br>';
echo $conta->obterSaldo();
echo '<br>';
$conta->sacar(150);
echo '<br>';
echo $conta->obterSaldo();
echo '<br>';