<?php
namespace RomanNumbers\Digits;

class SingleDigit extends DecimalDigdit
{
    public function __construct(int $decimalNumber)
    {
        $value = ($decimalNumber % 10);
        parent::__construct($value, 0);        
    }

    public static function supports(int $decimalNumber): bool
    {
        return $decimalNumber >= 0;
    }

    public function toRoman(): string
    {
        return match ($this->value) {
            0 => '',
            1 => 'I',
            2 => 'II',
            3 => 'III',
            4 => 'IV',
            5 => 'V',
            6 => 'VI',
            7 => 'VII',
            8 => 'VIII',
            9 => 'IX',
        };
    }
}
