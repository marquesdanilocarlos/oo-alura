<?php

namespace AluraBank\Model\Account;

class Account
{
    private Holder $holder;
    private float $balance;
    private static int $accountNumber = 0;

    public function __construct(Holder $holder)
    {
        $this->holder = $holder;
        $this->balance = 0;

        self::$accountNumber++;
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

    public function getBalance(): string
    {
        return "R$ " . number_format($this->balance, 2, ",", ".");
    }

    public static function getAccountNumber(): int
    {
        return self::$accountNumber;
    }

    public function __destruct()
    {
        echo "A conta de {$this->holder->getName()} foi destruída! <br/>";
        self::$accountNumber--;
    }


    public function getHolder(): Holder
    {
        return $this->holder;
    }
}