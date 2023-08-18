<?php

namespace AluraBank\Model\Account;

use AluraBank\Model\Address;
use AluraBank\Model\Authenticable;
use AluraBank\Model\Cpf;
use AluraBank\Model\Person;

class Holder extends Person implements Authenticable
{
    private Address $address;


    public function __construct(Cpf $cpf, string $name, Address $address)
    {
        parent::__construct($cpf, $name);
        $this->address = $address;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function canAuth(string $pass): bool
    {
        return $pass === "abcd";
    }


}