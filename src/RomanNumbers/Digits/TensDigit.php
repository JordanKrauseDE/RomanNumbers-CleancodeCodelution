<?php
namespace RomanNumbers\Digits;

class TensDigit extends DecimalDigdit
{
    public function __construct(int $decimalNumber)
    {
        $value = intdiv($decimalNumber % 100, 10);
        parent::__construct($value, 1);        
    }

    public static function supports(int $decimalNumber): bool
    {
        return $decimalNumber >= 10;
    }

    public function toRoman(): string
    {
        return match ($this->value) {
            0 => '',
            1 => 'X',
            2 => 'XX',
            3 => 'XXX',
            4 => 'XL',
            5 => 'L',
            6 => 'LX',
            7 => 'LXX',
            8 => 'LXXX',
            9 => 'XC',
        };
    }
}
