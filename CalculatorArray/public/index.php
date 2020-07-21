<?php
include "../vendor/autoload.php";

use Core\Calculator;

$calc = new Calculator();

echo $calc->sumArray([1, 2, 3]);
echo "<br>";
echo $calc->mulArray([2, 4]);
echo "<br>";
$calc->mulArrayInt([2, 3], 3)[0];