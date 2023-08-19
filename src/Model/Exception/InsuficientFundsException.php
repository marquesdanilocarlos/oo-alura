<?php

namespace AluraBank\Model\Exception;

use DomainException;

class InsuficientFundsException extends DomainException
{
    public function __construct(float $value, float $actualBalance)
    {
        $message = "Você tentou realizar o saque de {$value}, mas possui apenas {$actualBalance} em conta.";
        parent::__construct($message);
    }
}