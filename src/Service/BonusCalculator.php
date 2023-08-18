<?php

namespace AluraBank\Service;

use AluraBank\Model\Employee\Employee;

class BonusCalculator
{
    private float $totalBonus = 0;

    public function addBonus(Employee $employee): void
    {
        $this->totalBonus += $employee->getBonus();
    }

    public function getTotalBonus(): float
    {
        return $this->totalBonus;
    }

}