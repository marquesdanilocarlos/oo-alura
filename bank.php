<?php

require __DIR__ . "/src/Account.php";

$account = new Account("033.218.441-25", "Danilo Carlos Marques");
$account->deposit(500);
$account->withdraw(250);
$account->deposit(137);

var_dump($account);

$anotherAccount = new Account("044.321.541-22", "Juvenildo Santos");
$anotherAccount->deposit(700);
$anotherAccount->transfer(246, $account);
$anotherAccount->withdraw(370);
$anotherAccount->deposit(272);

var_dump($account);
var_dump($anotherAccount);


$thirdAccount = $account;
//$thirdAccount->holderName = "Chris Bumstead, o CBUM!";

var_dump($thirdAccount);