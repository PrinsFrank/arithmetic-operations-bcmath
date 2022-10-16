<?php
declare(strict_types=1);

namespace PrinsFrank\ArithmeticOperationsBCMath;

use PrinsFrank\ArithmeticOperations\ArithmeticOperations;

class ArithmeticOperationsBCMath implements ArithmeticOperations
{
    public function add(float $left, float $right): float
    {
        return (float) bcadd((string) $left, (string) $right);
    }

    public function subtract(float $left, float $right): float
    {
        return (float) bcsub((string) $left, (string) $right);
    }

    public function divide(float $dividend, float $divisor): float
    {
        return (float) bcdiv((string) $dividend, (string) $divisor);
    }

    public function multiply(float $left, float $right): float
    {
        return (float) bcmul((string) $left, (string) $right);
    }

    public function modulus(float $dividend, float $divisor): float
    {
        return (float) bcmod((string) $dividend, (string) $divisor);
    }

    public function power(float $base, float $exponent): float
    {
        return (float) bcpow((string) $base, (string) $exponent);
    }
}
