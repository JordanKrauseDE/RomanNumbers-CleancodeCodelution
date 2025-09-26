<?php
namespace RomanNumbers\Digits;

class ThousandDigit extends DecimalDigdit
{
    public function __construct(int $decimalNumber)
    {
        $value = intdiv($decimalNumber, 1000);
        parent::__construct($value, 3);
    }

    public static function supports(int $decimalNumber): bool
    {
        return $decimalNumber >= 1000;
    }

    public function toRoman(): string
    {
        // Klassisch maximal MMM (3). Falls dein Aufrufer (z. B. RomanNumber) >3999 verhindert,
        // ist $this->value ohnehin 0..3.
        return str_repeat('M', $this->value);
    }
}
