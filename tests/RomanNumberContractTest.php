<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use RomanNumbers\Contracts\RomanNumberContract;
use RomanNumbers\RomanNumber;
use RomanNumbers\Digits\SingleDigit;
use RomanNumbers\Digits\TensDigit;
use RomanNumbers\Digits\HundredDigit;
use RomanNumbers\Digits\ThousandDigit;
use InvalidArgumentException;

final class RomanNumberContractTest extends TestCase
{
    private RomanNumberContract|RomanNumber $converter;

    protected function setUp(): void
    {
        $this->converter = new RomanNumber();
    }

    /* ---------- bestehende Basis-Tests ---------- */

    public function test1999(): void
    {
        $this->assertSame('MCMXCIX', $this->converter->toRoman(1999));
    }

    public function testEdgeValues(): void
    {
        $this->assertSame('I', $this->converter->toRoman(1));
        $this->assertSame('MMMCMXCIX', $this->converter->toRoman(3999));
    }

    public function testSingles(): void
    {
        $this->assertSame('II', $this->converter->toRoman(2));
        $this->assertSame('III', $this->converter->toRoman(3));
        $this->assertSame('V', $this->converter->toRoman(5));
        $this->assertSame('VIII', $this->converter->toRoman(8));
    }

    public function testSubtractiveOnes(): void
    {
        $this->assertSame('IV', $this->converter->toRoman(4));
        $this->assertSame('IX', $this->converter->toRoman(9));
    }

    public function testTensBasic(): void
    {
        $this->assertSame('X', $this->converter->toRoman(10));
        $this->assertSame('XX', $this->converter->toRoman(20));
        $this->assertSame('XXX', $this->converter->toRoman(30));
        $this->assertSame('L', $this->converter->toRoman(50));
        $this->assertSame('LX', $this->converter->toRoman(60));
        $this->assertSame('LXX', $this->converter->toRoman(70));
        $this->assertSame('LXXX', $this->converter->toRoman(80));
        $this->assertSame('XC', $this->converter->toRoman(90));
    }

    public function testSubtractiveTens(): void
    {
        $this->assertSame('XL', $this->converter->toRoman(40));
        $this->assertSame('XLIX', $this->converter->toRoman(49));
        $this->assertSame('XCIX', $this->converter->toRoman(99));
    }

    public function testHundredsBasic(): void
    {
        $this->assertSame('C', $this->converter->toRoman(100));
        $this->assertSame('CC', $this->converter->toRoman(200));
        $this->assertSame('CCC', $this->converter->toRoman(300));
        $this->assertSame('D', $this->converter->toRoman(500));
        $this->assertSame('DC', $this->converter->toRoman(600));
        $this->assertSame('DCC', $this->converter->toRoman(700));
        $this->assertSame('DCCC', $this->converter->toRoman(800));
        $this->assertSame('CM', $this->converter->toRoman(900));
    }

    public function testSubtractiveHundreds(): void
    {
        $this->assertSame('CD', $this->converter->toRoman(400));
        $this->assertSame('CDXLIV', $this->converter->toRoman(444));
        $this->assertSame('CMXCIX', $this->converter->toRoman(999));
    }

    public function testThousandsBasic(): void
    {
        $this->assertSame('M', $this->converter->toRoman(1000));
        $this->assertSame('MM', $this->converter->toRoman(2000));
        $this->assertSame('MMM', $this->converter->toRoman(3000));
    }

    public function testMixedNumbers(): void
    {
        $this->assertSame('MCMLXXXVII', $this->converter->toRoman(1987));
        $this->assertSame('MCMXCIV', $this->converter->toRoman(1994));
        $this->assertSame('MMXXV', $this->converter->toRoman(2025));
        $this->assertSame('MMCDXXI', $this->converter->toRoman(2421));
        $this->assertSame('MMMDCCCLXXXVIII', $this->converter->toRoman(3888));
    }

    public function testZerosInBetween(): void
    {
        $this->assertSame('MM', $this->converter->toRoman(2000));
        $this->assertSame('MMV', $this->converter->toRoman(2005));
        $this->assertSame('MML', $this->converter->toRoman(2050));
        $this->assertSame('MMD', $this->converter->toRoman(2500));
        $this->assertSame('MMMX', $this->converter->toRoman(3010));
        $this->assertSame('MMMCC', $this->converter->toRoman(3200));
    }

    public function testNearHundreds(): void
    {
        $this->assertSame('CXCIX', $this->converter->toRoman(199));
        $this->assertSame('CCXCIX', $this->converter->toRoman(299));
        $this->assertSame('CCCXCIX', $this->converter->toRoman(399));
        $this->assertSame('CDXCIX', $this->converter->toRoman(499));
        $this->assertSame('DXCIX', $this->converter->toRoman(599));
        $this->assertSame('DCXCIX', $this->converter->toRoman(699));
        $this->assertSame('DCCXCIX', $this->converter->toRoman(799));
        $this->assertSame('DCCCXCIX', $this->converter->toRoman(899));
        $this->assertSame('CMXCIX', $this->converter->toRoman(999));
    }

    public function testInvalidInputsThrow(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->converter->toRoman(0);
    }

    public function testNegativeThrows(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->converter->toRoman(-1);
    }

    public function testTooLargeThrows(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->converter->toRoman(4000);
    }

    public function testDigitClassesInOrder(): void
    {
        $map = $this->converter->digitClassesInOrder();
        $this->assertSame(ThousandDigit::class, $map[3]);
        $this->assertSame(HundredDigit::class,  $map[2]);
        $this->assertSame(TensDigit::class,     $map[1]);
        $this->assertSame(SingleDigit::class,   $map[0]);
    }

    public function testMergeParts(): void
    {
        $this->assertSame('MCM',  $this->converter->mergeParts(['M', 'CM']));
        $this->assertSame('MMV',  $this->converter->mergeParts(['MM', 'V']));
        $this->assertSame('',     $this->converter->mergeParts([]));
    }

    public function testAssertRange(): void
    {
        // ok
        $this->converter->assertRange(1);
        $this->converter->assertRange(3999);

        // throws
        $this->expectException(InvalidArgumentException::class);
        $this->converter->assertRange(0);
    }
}
