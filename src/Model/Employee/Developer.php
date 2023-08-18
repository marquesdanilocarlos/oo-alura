<?php

namespace AluraBank\Model\Employee;

use AluraBank\Model\Accessor;
use AluraBank\Model\Cpf;

class Developer extends Employee
{

    use Accessor;

    public function __construct(Cpf $cpf, string $name, float $wage)
    {
        parent::__construct($cpf, $name, $wage);
    }

    public function getBonus(): float
    {
        return $this->getWage() * 0.05;
    }

    public function levelUp()
    {
        $this->wageIncrease($this->getWage() * 0.75);
    }

}