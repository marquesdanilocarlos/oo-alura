<?php

class Holder
{
    private Cpf $cpf;
    private string $name;


    public function __construct(Cpf $cpf, string $name)
    {
        $this->cpf = $cpf;
        $this->setName($name);
    }

    public function getCpf(): Cpf
    {
        return $this->cpf;
    }

    public function getName(): string
    {
        return $this->name;
    }

    private function setName(string $name): void
    {
        if (strlen($name) < 5) {
            echo "O nome precisa possuir pelo menos 5 caracteres.";
            return;
        }

        $this->name = $name;
    }

}