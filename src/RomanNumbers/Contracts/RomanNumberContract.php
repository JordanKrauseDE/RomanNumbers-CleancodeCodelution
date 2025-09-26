<?php
namespace RomanNumbers\Contracts;

interface RomanNumberContract
{
    /**
     * Convert a decimal number (1..3999) to its Roman representation.
     */
    public function toRoman(int $number): string;
}
