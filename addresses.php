<?php

use AluraBank\Model\Address;

require_once __DIR__ . "/autoload.php";

$address = new Address("QA 13 MR Casa", "08", "Setor Sul", "Planaltina");

echo $address->neighborhood . "<br/>";
$address->neighbordhood = "Que isso porra?";

echo $address;
