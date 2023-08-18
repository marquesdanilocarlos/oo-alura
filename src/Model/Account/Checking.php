<?php

namespace AluraBank\Model\Account;

class Checking extends Account
{
    public function __construct(Holder $holder)
    {
        parent::__construct($holder);
        $this->withdrawPercent = 0.05;
    }

    public function getWithdrawTax(float $value): float
    {
        return $value * $this->withdrawPercent;
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
}