<?php

require_once __DIR__ . "/autoload.php";

use AluraBank\Model\Account\Holder;
use AluraBank\Model\Address;
use AluraBank\Model\Cpf;
use AluraBank\Model\Employee\Director;
use AluraBank\Service\Auth;

$director = new Director(
    new Cpf("033.218.441-25"),
    "Peter Kummer",
    10000
);

$holder = new Holder(
    new Cpf("033.218.441-25"),
    "Peter Kummer",
    new Address("QA 13 MR Casa", "08", "Setor Sul", "Planaltina")
);

$auth = new Auth();
$auth->login($director, "1234");

$auth->login($holder, "46724");