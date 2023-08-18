<?php

namespace AluraBank\Model;

abstract class Person
{
    protected string $name;
    protected Cpf $cpf;

    public function __construct(Cpf $cpf, string $name)
    {
        $this->setName($name);
        $this->cpf = $cpf;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCpf(): string
    {
        return $this->cpf->getNumber();
    }

    protected function setName(string $name): void
    {
        if (strlen($name) < 5) {
            echo "O nome precisa possuir pelo menos 5 caracteres.";
            return;
        }

        $this->name = $name;
    }

}