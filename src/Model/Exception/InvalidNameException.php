<?php

namespace AluraBank\Model\Exception;

use DomainException;

class InvalidNameException extends DomainException
{
    public function __construct(string $name)
    {
        $message = "O nome {$name} deve possuir no mínimo 5 caracteres.";
        parent::__construct($message);
    }
}