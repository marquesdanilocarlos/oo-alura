<?php

class Account
{
    private string $holderCpf;
    private string $holderName;
    private float $balance = 0;

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

    public function setHolderCpf(string $holderCpf): void
    {
        $this->holderCpf = $holderCpf;
    }

    public function setHolderName(string $holderName): void
    {
        $this->holderName = $holderName;
    }

    /*public function setBalance(float $balance): void
    {
        $this->balance = $balance;
    }*/

}