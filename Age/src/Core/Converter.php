<?php

namespace Core;

use Exception;
use phpDocumentor\Reflection\Types\Integer;

class Converter
{

    public function convertAge(int $int)
    {
        if ($int / 365 < 100) {
            return $int / 365;
        } else {
            throw new Exception('Вы очень старый!');
        }
    }
}