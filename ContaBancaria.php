<?php

class ContaBancaria
{
    private $titular;
    private $saldo = 0;

    public function setTitular($nome)
    {
        $this->titular = $nome;
    }

    public function getTitular()
    {
        return $this->titular;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
    }

    public function consultarSaldo()
    {
        return $this->saldo;
    }

    public function sacar($valor)
    {
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;
            echo "Saque de R$ " . number_format($valor, 2, ',', '.') . " realizado.<br>";
        } else {
            echo "Saldo insuficiente<br>";
        }
    }
}
