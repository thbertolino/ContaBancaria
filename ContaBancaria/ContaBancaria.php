<?php

class ContaBancaria
{

    // public - private - protected

    public $banco;
    public $nomeTitular = 'Thiago Bertolino';
    public $numeroAgencia;
    public $numberoConta;
    public $saldo;

}

$conta = new ContaBancaria();

var_dump($conta->nomeTitular);