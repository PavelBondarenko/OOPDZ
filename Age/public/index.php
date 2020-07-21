<?php
include "../vendor/autoload.php";

use Core\Converter;

$age = new Converter();

echo $age->convertAge(9529);