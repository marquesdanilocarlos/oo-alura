<?php

namespace AluraBank\Model\Account;

abstract class Account
{
    private Holder $holder;
    protected float $balance;
    private static int $accountNumber = 0;

    protected float $withdrawPercent;

    public function __construct(Holder $holder)
    {
        $this->holder = $holder;
        $this->balance = 0;

        self::$accountNumber++;
    }

    public function withdraw(float $value): void
    {
        $value = $this->getWithdrawTax($value);
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

    abstract public function getWithdrawTax(float $value): float;
}