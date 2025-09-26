<?php
require __DIR__ . '/../../vendor/autoload.php';

use RomanNumbers\RomanNumber;

$r = new RomanNumber();
echo $r->toRoman(1) . PHP_EOL;
$r = new RomanNumber();
echo $r->toRoman(10) . PHP_EOL;
$r = new RomanNumber();
echo $r->toRoman(100) . PHP_EOL;
$r = new RomanNumber();
echo $r->toRoman(999) . PHP_EOL;
$r = new RomanNumber();
echo $r->toRoman(1999) . PHP_EOL;

