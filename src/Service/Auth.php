<?php

namespace AluraBank\Service;

use AluraBank\Model\Authenticable;
use AluraBank\Model\Employee\Director;

class Auth
{
    public function login(Authenticable $authenticable, string $pass): bool
    {
        if (!$authenticable->canAuth($pass)) {
            echo "Esse usuário não pode autenticar.";
            return false;
        }

        return true;
    }
}