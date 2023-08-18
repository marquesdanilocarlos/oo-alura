<?php

namespace AluraBank\Model\Employee;

use AluraBank\Model\Cpf;

class Director extends Employee
{
    public function __construct(Cpf $cpf, string $name, float $wage)
    {
        parent::__construct($cpf, $name, $wage);
    }

    public function getBonus(): float
    {
        return $this->getWage() * 2;
    }

    public function canAuth(string $pass): bool
    {
        return $pass === '1234';
    }


}