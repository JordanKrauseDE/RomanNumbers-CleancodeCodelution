<?php

namespace RomanNumbers;

use RomanNumbers\Contracts\RomanNumberContract;
use RomanNumbers\Digits\ThousandDigit;
use RomanNumbers\Digits\HundredDigit;
use RomanNumbers\Digits\TensDigit;
use RomanNumbers\Digits\SingleDigit;
use InvalidArgumentException;

class RomanNumber implements RomanNumberContract
{
    public function __construct() {}

    public function toRoman(int $decimalnumber): string
    {
        $this->assertRange($decimalnumber);

        $decimalDigits = $this->split($decimalnumber);
        $romanParts = $this->convertToRomanDigit($decimalDigits);
        $mergedRomanNumber = $this->mergeParts($romanParts);

        return $mergedRomanNumber;
    }

    public function split(int $decimalNumber): array
    {
        $digitClasses   = $this->digitClassesInOrder();
        $relevantDigits = [];

        foreach ($digitClasses as $digitClass) {
            if ($digitClass::supports($decimalNumber)) {
                $relevantDigits[] = new $digitClass($decimalNumber);
            }
        }

        return $relevantDigits;
    }

    public function mergeParts(array $romanParts): string
    {
        return implode('', $romanParts);
    }

    public function digitClassesInOrder(): array
    {
        return [
            3 => ThousandDigit::class,
            2 => HundredDigit::class,
            1 => TensDigit::class,
            0 => SingleDigit::class,
        ];
    }


    public function convertToRomanDigit(array $digits): array
    {
        $romanDigits = [];

        foreach ($digits as $position => $digit) {
            $romanDigit = $digit->toRoman();
            $romanDigits[] = $romanDigit;
        }

        return $romanDigits;
    }

    public function assertRange(int $number): void
    {
        if ($number < 1 || $number > 3999) {
            throw new InvalidArgumentException('Number must be between 1 and 3999.');
        }
    }
}
