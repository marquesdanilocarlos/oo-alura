<?php

class Cpf
{
    private string $number = "";

    public function __construct(string $number)
    {
        $this->setNumber($number);
    }

    private function setNumber(string $number): void
    {
        // Extrai somente os números
        $number = preg_replace('/[^0-9]/is', '', $number);

        // Verifica se foi informado todos os digitos corretamente
        if (strlen($number) != 11) {
            echo "Cpf inválido! <br/>";
            exit;
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $number)) {
            echo "Cpf inválido! <br/>";
            exit;
        }

        // Faz o calculo para validar o Cpf
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $number[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($number[$c] != $d) {
                echo "Cpf inválido! <br/>";
                exit;
            }
        }

        $this->number = $number;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function __toString(): string
    {
        $cpf = preg_replace("/\D/", '', $this->number);
        return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cpf);
    }


}