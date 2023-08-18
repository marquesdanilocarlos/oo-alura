<?php

namespace AluraBank\Model\Employee;

use AluraBank\Model\Cpf;
use AluraBank\Model\Person;

abstract class Employee extends Person
{
    private float $wage;

    public function __construct(Cpf $cpf, string $name, float $wage)
    {
        parent::__construct($cpf, $name);
        $this->wage = $wage;
    }

    public function getWage(): float
    {
        return $this->wage;
    }

    protected function wageIncrease(float $value): void
    {
        $this->wage += abs($value);
    }

    public abstract function getBonus(): float;

}