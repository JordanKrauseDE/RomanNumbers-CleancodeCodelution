<?php
namespace RomanNumbers\Digits;

class HundredDigit extends DecimalDigdit
{
    public function __construct(int $decimalNumber)
    {
        // Hunderterstelle: (n % 1000) / 100 → 0..9
        $value = intdiv($decimalNumber % 1000, 100);
        parent::__construct($value, 2);
    }

    public static function supports(int $decimalNumber): bool
    {
        // Ab 100 gibt es eine Hunderterstelle
        return $decimalNumber >= 100;
    }

    public function toRoman(): string
    {
        return match ($this->value) {
            0 => '',
            1 => 'C',
            2 => 'CC',
            3 => 'CCC',
            4 => 'CD',
            5 => 'D',
            6 => 'DC',
            7 => 'DCC',
            8 => 'DCCC',
            9 => 'CM',
        };
    }
}
