<?php

class ContaBancaria
{

    // public - private - protected

    public $banco;
    public $nomeTitular = 'Thiago';
    public $numeroAgencia;
    public $numberoConta;
    public $saldo;

}

$conta = new ContaBancaria();

var_dump($conta->nomeTitular);