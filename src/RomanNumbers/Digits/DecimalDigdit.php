<?php
namespace RomanNumbers\Digits;

abstract class DecimalDigdit
{
    public function __construct(
        public int $value,
    ) {}

    abstract public function toRoman(): string;

    abstract public static function supports(int $decimalNumber): bool;
}
