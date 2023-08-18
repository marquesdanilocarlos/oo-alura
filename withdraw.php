<?php

require_once __DIR__ . "/autoload.php";

use AluraBank\Model\{Account\Checking, Account\Holder, Address, Cpf};

$checkingAccount = new Checking(
    new Holder(
        new Cpf("03321844125"),
        "Danilo Marques",
        new Address("QA 13 MR Casa", "08", "Setor Sul", "Planaltina")
    )
);

$checkingAccount->deposit(1000);
$checkingAccount->withdraw(500);

var_dump($checkingAccount);