<?php
declare(strict_types=1);

namespace RomanNumbers\Digits;

use RomanNumbers\Contracts\DecimalDigitContract;

/**
 * - $value:   the digit at this position (0..9; thousands: 0..3)
 * - $position: 3=thousands, 2=hundreds, 1=tens, 0=ones
 */
abstract class DecimalDigdit
{
    public function __construct(
        public int $value,
        public int $position
    ) {}

    abstract public function toRoman(): string;

    abstract public static function supports(int $decimalNumber): bool;
}
