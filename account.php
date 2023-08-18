<?php

require __DIR__ . "/src/Account.php";

$account = new Account;
$account->holderCpf = "033.218.441-25";
$account->holderName = "Danilo Carlos Marques";
$account->balance = 500;

$anotherAccount = new Account;
$anotherAccount->holderCpf = "044.321.541-22";
$anotherAccount->holderName = "Juvenildo Santos";
$anotherAccount->balance = 700;


$thirdAccount = $account;
$thirdAccount->holderName = "Chris Bumstead, o CBUM!";

var_dump($account, $anotherAccount, $thirdAccount);