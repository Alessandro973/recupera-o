<?php

require_once "ContaBancaria.php";


$conta1 = new ContaBancaria();
$conta1->setTitular("João");

echo "<h2>Conta 1 - " . $conta1->getTitular() . "</h2>";

echo "Saldo inicial: R$ " .
    number_format($conta1->consultarSaldo(), 2, ',', '.') . "<br>";

$conta1->depositar(1000);

echo "Após depósito de R$ 1.000,00: R$ " .
    number_format($conta1->consultarSaldo(), 2, ',', '.') . "<br>";

echo "Tentando sacar R$ 300,00:<br>";
$conta1->sacar(300);

echo "Saldo após saque: R$ " .
    number_format($conta1->consultarSaldo(), 2, ',', '.') . "<br>";

echo "Tentando sacar R$ 1000,00:<br>";
$conta1->sacar(1000);

echo "Saldo final: R$ " .
    number_format($conta1->consultarSaldo(), 2, ',', '.') . "<br>";



$conta2 = new ContaBancaria();
$conta2->setTitular("Maria");

echo "<h2>Conta 2 - " . $conta2->getTitular() . "</h2>";

echo "Saldo inicial: R$ " .
    number_format($conta2->consultarSaldo(), 2, ',', '.') . "<br>";

$conta2->depositar(500);

echo "Após depósito de R$ 500,00: R$ " .
    number_format($conta2->consultarSaldo(), 2, ',', '.') . "<br>";

echo "Tentando sacar R$ 200,00:<br>";
$conta2->sacar(200);

echo "Saldo após saque: R$ " .
    number_format($conta2->consultarSaldo(), 2, ',', '.') . "<br>";

echo "Tentando sacar R$ 500,00:<br>";
$conta2->sacar(500);

echo "Saldo final: R$ " .
    number_format($conta2->consultarSaldo(), 2, ',', '.') . "<br>";
