<?php

namespace AluraBank\Model\Account;

class Saving extends Account
{
    public function __construct(Holder $holder)
    {
        parent::__construct($holder);
        $this->withdrawPercent = 0.03;
    }

    public function getWithdrawTax(float $value): float
    {
        return $value * $this->withdrawPercent;
    }


}