<?php

namespace Core;

class Converter
{

    public function convertAge(int $int)
    {
        return ceil($int / 365);
    }
}