<?php

class Account
{
    private string $holderCpf;
    private string $holderName;
    private float $balance;

    public function __construct(string $holderCpf, string $holderName)
    {
        $this->holderCpf = $holderCpf;
        $this->holderName = $holderName;
        $this->balance = 0;
    }

    public function withdraw(float $value): void
    {
        if ($value > $this->balance) {
            echo "Saldo indisponível";
            return;
        }

        $this->balance -= $value;
        echo "Saque de {$value} realizado com sucesso! <br/>";
    }

    public function deposit(float $value): void
    {
        if ($value <= 0) {
            echo "O valor a depositar deve ser um valor positivo.";
            return;
        }

        $this->balance += $value;
        echo "Depósito de {$value} realizado com sucesso! <br/>";
    }

    public function transfer(float $value, self $destinyAccount): void
    {
        if ($value > $this->balance) {
            echo "Saldo indisponível";
            return;
        }

        $this->withdraw($value);
        $destinyAccount->deposit($value);
        echo "Transferência realizada com sucesso! <br/>";
    }

    public function getHolderCpf(): string
    {
        return $this->holderCpf;
    }

    public function getHolderName(): string
    {
        return $this->holderName;
    }

    public function getBalance(): string
    {
        return "R$ " . number_format($this->balance, 2, ",", ".");
    }

}