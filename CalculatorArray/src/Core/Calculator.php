<?php


namespace Core;


class Calculator
{
    protected $int;

    public function sumArray(array $int): int
    {
        return array_sum($int);
    }

    public function mulArray(array $int): int
    {
        return array_product($int);
    }

    public function mulArrayInt(array $int, int $x)
    {

        foreach ($int as $value) {
            echo $value = $value * $x;
        }
    }

}