<?php

namespace AluraBank\Model;

use function get_class_methods;
use function method_exists;
use function ucfirst;

final class Address
{
    private string $street;
    private string $number;
    private string $neighborhood;
    private string $city;

    public function __construct(string $street, string $number, string $neighborhood, string $city)
    {
        $this->street = $street;
        $this->number = $number;
        $this->neighborhood = $neighborhood;
        $this->city = $city;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getNeighborhood(): string
    {
        return $this->neighborhood;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function __toString(): string
    {
        return "{$this->street} {$this->number} {$this->neighborhood} {$this->city}";
    }

    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    public function setNeighborhood(string $neighborhood): void
    {
        $this->neighborhood = $neighborhood;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

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