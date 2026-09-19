php
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
}
