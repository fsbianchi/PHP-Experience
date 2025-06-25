<?php

class ContaBancaria
{
 //public - pode ser acessado de qualquer lugar
 // private - só pode ser acessado dentro da classe
 // protected - só pode ser acessado dentro da classe e nas classes que herdam dela
 public $banco;
 public $nometitular = 'João da Silva';
 public $numeroAgencia;
 public $numeroConta;
 public $saldo = 2000.00;  



}
$conta = new ContaBancaria(); // Instanciando a classe ContaBancaria

var_dump($conta->nometitular); // Exibe o valor da propriedade banco, que está vazia

//$conta->$saldo = 5000.00; // Atribuindo um novo valor à propriedade saldo
//var_dump($conta->saldo); // Exibe o novo valor da propriedade saldo

?>;