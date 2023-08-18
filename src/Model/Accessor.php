<?php

namespace AluraBank\Model;

use function method_exists;
use function ucfirst;

trait Accessor
{
    public function __get(string $name)
    {
        $method = "get" . ucfirst($name);

        if (!method_exists(self::class, $method)) {
            return false;
        }

        return $this->{$method}();
    }

    public function __set(string $name, $value): void
    {
        $method = "set" . ucfirst($name);

        if (!method_exists(self::class, $method)) {
            echo "Método inexistente! <br/>";
            return;
        }

        $this->{$method}($value);
    }
}