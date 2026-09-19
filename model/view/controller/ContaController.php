<?php

require_once "../model/ContaModel.php";


$conta1 = new ContaBancaria();
$conta1->setTitular("Alessandro");
$conta1->depositar(1500);


$conta2 = new ContaBancaria();
$conta2->setTitular("Beatriz");
$conta2->depositar(2500);


$conta3 = new ContaBancaria();
$conta3->setTitular("Pablo");
$conta3->depositar(800);


$contas = [
    $conta1,
    $conta2,
    $conta3
];


require_once "../view/contas.php";
