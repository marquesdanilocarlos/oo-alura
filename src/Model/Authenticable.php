<?php

namespace AluraBank\Model;

interface Authenticable
{
    public function canAuth(string $pass): bool;
}