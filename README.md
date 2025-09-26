# Task 
Write a program, which converts from normal decimal numbers to roman numbers.
Example:
```
1 → I
10 → X
7 → VII
etc.
```
It is not necessary to support numbers bigger than 3000.
Note: You can not write „IM“ for 999. Wikipedia says: modern roman numerals … are written by
expressing each digit separately starting with the left most digit and skipping any digit with a value of
zero. To see this in practice, consider the … example of 1990:

`1990 → 1000 = M, 900 = CM, 90 = XC. Result: MCMXC.`

`2008 → 2000 = MM, 8 = VIII. Result: MMVIII.`

```
romanNumbers
├─ README.md
├─ composer.json
├─ src
│  ├─ RomanNumbers
│  │  ├─ Contracts
│  │  │  └─ RomanNumberContract.php
│  │  ├─ Digits
│  │  │  ├─ DecimalDigdit.php
│  │  │  ├─ HundredDigit.php
│  │  │  ├─ SingleDigit.php
│  │  │  ├─ TensDigit.php
│  │  │  └─ ThousandDigit.php
│  │  └─ RomanNumber.php
│  └─ examples
│     └─ index.php
└─ tests
   └─ RomanNumberContractTest.php
```