<?php

require_once __DIR__ . "/autoload.php";

use AluraBank\Model\Account\Checking;
use AluraBank\Model\Account\Holder;
use AluraBank\Model\Address;
use AluraBank\Model\Cpf;

$address = new Address("QA 13 MR Casa", "08", "Setor Sul", "Planaltina Goiás");

$cpf = new Cpf("033.218.441-25");
$holder = new Holder($cpf, "Danilo Carlos Marques", $address);
$account = new Checking($holder);
echo $account->getHolder()->getName() . "<br/>";
echo $account->getHolder()->getCpf() . "<br/>";
$account->deposit(500);
$account->withdraw(250);
$account->deposit(137);

var_dump($account);

echo "<hr/>";

$anotherAddress = new Address("QD 01 MR 04", "10", "Setor Sul", "Planaltina Goiás");
$anotherAccount = new Checking(new Holder(new Cpf("893.584.880-85"), "Juvenildo Santos", $anotherAddress));
echo $anotherAccount->getHolder()->getName() . "<br/>";
echo $anotherAccount->getHolder()->getCpf() . "<br/>";
$anotherAccount->deposit(700);
$anotherAccount->transfer(246, $account);
$anotherAccount->withdraw(370);
$anotherAccount->deposit(272);

var_dump($account, $anotherAccount);
var_dump(Checking::getAccountNumber());
echo "<hr/>";
