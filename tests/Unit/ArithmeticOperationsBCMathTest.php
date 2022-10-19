<?php
declare(strict_types=1);

namespace PrinsFrank\ArithmeticOperationsBCMath\Tests\Unit;

use PHPUnit\Framework\TestCase;
use PrinsFrank\ArithmeticOperationsBCMath\ArithmeticOperationsBCMath;

/**
 * @coversDefaultClass \PrinsFrank\ArithmeticOperationsBCMath\ArithmeticOperationsBCMath
 */
class ArithmeticOperationsBCMathTest extends TestCase
{
    /**
     * @covers ::add
     */
    public function testAdd(): void
    {
        static::assertSame(42.0, (new ArithmeticOperationsBCMath(0))->add(21, 21));

        static::assertSame(42.0, (new ArithmeticOperationsBCMath(0))->add(21.333, 21.3));
        static::assertSame(42.6, (new ArithmeticOperationsBCMath(1))->add(21.333, 21.3));
        static::assertSame(42.63, (new ArithmeticOperationsBCMath(2))->add(21.333, 21.3));
    }

    /**
     * @covers ::subtract
     */
    public function testSubtract(): void
    {
        static::assertSame(42.0, (new ArithmeticOperationsBCMath(0))->subtract(84, 42));

        static::assertSame(0.0, (new ArithmeticOperationsBCMath(0))->subtract(21.333, 21.3));
        static::assertSame(0.0, (new ArithmeticOperationsBCMath(1))->subtract(21.333, 21.3));
        static::assertSame(0.03, (new ArithmeticOperationsBCMath(2))->subtract(21.333, 21.3));
    }

    /**
     * @covers ::divide
     */
    public function testDivide(): void
    {
        static::assertSame(42.0, (new ArithmeticOperationsBCMath(0))->divide(84, 2));

        static::assertSame(42.0, (new ArithmeticOperationsBCMath(0))->divide(127, 3));
        static::assertSame(42.3, (new ArithmeticOperationsBCMath(1))->divide(127, 3));
        static::assertSame(42.33, (new ArithmeticOperationsBCMath(2))->divide(127, 3));
    }

    /**
     * @covers ::multiply
     */
    public function testMultiply(): void
    {
        static::assertSame(42.0, (new ArithmeticOperationsBCMath(0))->multiply(21, 2));

        static::assertSame(42.0, (new ArithmeticOperationsBCMath(0))->multiply(14.1111, 3));
        static::assertSame(42.3, (new ArithmeticOperationsBCMath(1))->multiply(14.1111, 3));
        static::assertSame(42.33, (new ArithmeticOperationsBCMath(2))->multiply(14.1111, 3));
    }

    /**
     * @covers ::modulus
     */
    public function testModulus(): void
    {
        static::assertSame(42.0, (new ArithmeticOperationsBCMath(0))->modulus(85, 43));

        static::assertSame(42.0, (new ArithmeticOperationsBCMath(0))->modulus(85.33, 43));
        static::assertSame(42.3, (new ArithmeticOperationsBCMath(1))->modulus(85.33, 43));
        static::assertSame(42.33, (new ArithmeticOperationsBCMath(2))->modulus(85.33, 43));
    }

    /**
     * @covers ::power
     */
    public function testPower(): void
    {
        static::assertSame(2.0, (new ArithmeticOperationsBCMath(0))->power(2, 1));
        static::assertSame(4.0, (new ArithmeticOperationsBCMath(0))->power(2, 2));

        static::assertSame(5.0, (new ArithmeticOperationsBCMath(0))->power(2.3, 2));
        static::assertSame(5.2, (new ArithmeticOperationsBCMath(1))->power(2.3, 2));
        static::assertSame(5.29, (new ArithmeticOperationsBCMath(2))->power(2.3, 2));
    }
}
