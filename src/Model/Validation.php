<?php

namespace APP\Model;

class Validation{
    //validando nome
    public static function validateName(string $name)
    :bool
    {
        return mb_strlen($name) > 4;
    }

    //validando numeros
    public static function validateNumber(float $number)
    :bool
    {
        return $number > 0;
    }

    public static function validatePhone(string $phone):bool{
        return mb_strlen($phone) == 9;
    }

    public static function validateCNPJ(string $cnpj):bool{
        return mb_strlen($cnpj) == 14;
    }
}
