<?php

require __DIR__ . "/src/Account.php";
require __DIR__ . "/src/Holder.php";
require __DIR__ . "/src/Cpf.php";

$cpf = new Cpf("033.218.441-25");
$holder = new Holder($cpf, "Danilo Carlos Marques");
$account = new Account($holder);
echo $account->getHolder()->getName() . "<br/>";
echo $account->getHolder()->getCpf() . "<br/>";
$account->deposit(500);
$account->withdraw(250);
$account->deposit(137);

var_dump($account);

$anotherAccount = new Account(new Holder(new Cpf("044.692.348-11"), "Juvenildo Santos"));
echo $anotherAccount->getHolder()->getName() . "<br/>";
echo $anotherAccount->getHolder()->getCpf() . "<br/>";
$anotherAccount->deposit(700);
$anotherAccount->transfer(246, $account);
$anotherAccount->withdraw(370);
$anotherAccount->deposit(272);

var_dump($account, $anotherAccount);


var_dump(Account::getAccountNumber());