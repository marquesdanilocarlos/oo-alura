<?php

class Employee extends Person
{
    private string $role;

    public function __construct(Cpf $cpf, string $name, string $role)
    {
        parent::__construct($cpf, $name);
        $this->role = $role;
    }

    public function getRole(): string
    {
        return $this->role;
    }

}