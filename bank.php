<?php

require __DIR__ . "/src/Account.php";

$account = new Account;
/*$account->holderCpf = "033.218.441-25";
$account->holderName = "Danilo Carlos Marques";
$account->balance = 500;*/
$account->setHolderCpf("033.218.441-25");
$account->setHolderName("Danilo Carlos Marques");
//$account->setBalance(500);

$account->deposit(500);
$account->withdraw(250);
$account->deposit(137);

var_dump($account);

$anotherAccount = new Account;
/*$anotherAccount->holderCpf = "044.321.541-22";
$anotherAccount->holderName = "Juvenildo Santos";
$anotherAccount->balance = 700;*/
$anotherAccount->setHolderCpf("044.321.541-22");
$anotherAccount->setHolderName("Juvenildo Santos");
//$anotherAccount->setBalance(700);

$anotherAccount->deposit(700);
$anotherAccount->transfer(246, $account);
$anotherAccount->withdraw(370);
$anotherAccount->deposit(272);

var_dump($account);
var_dump($anotherAccount);


$thirdAccount = $account;
//$thirdAccount->holderName = "Chris Bumstead, o CBUM!";

var_dump($thirdAccount);