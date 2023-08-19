<?php

require_once __DIR__ . "/autoload.php";

use AluraBank\Model\{Account\Checking, Account\Holder, Address, Cpf, Exception\InsuficientFundsException};

try {
    $checkingAccount = new Checking(
        new Holder(
            new Cpf("033218441259"),
            "Ana",
            new Address("QA 13 MR Casa", "08", "Setor Sul", "Planaltina")
        )
    );

    $checkingAccount->deposit(-1000);
    $checkingAccount->withdraw(2000);
} catch (InvalidArgumentException|InsuficientFundsException $e) {
    echo $e->getMessage();
}