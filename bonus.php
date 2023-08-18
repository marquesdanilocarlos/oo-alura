<?php

require __DIR__ . "/autoload.php";

use AluraBank\Model\Cpf;
use AluraBank\Model\Employee\Developer;
use AluraBank\Model\Employee\Director;
use AluraBank\Model\Employee\Manager;
use AluraBank\Service\BonusCalculator;

$developer = new Developer(
    new Cpf("033.218.441-25"),
    "Danilo Carlos Marques",
    5000
);
$developer->levelUp();

$manager = new Manager(
    new Cpf("033.218.441-25"),
    "Carlos Márcio",
    7000
);

$director = new Director(
    new Cpf("033.218.441-25"),
    "Peter Kumman",
    10000
);

$calculator = new BonusCalculator();
$calculator->addBonus($developer);
$calculator->addBonus($manager);
$calculator->addBonus($director);

var_dump($calculator->getTotalBonus());