<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\UnitOfMeasure\Length;

use PHPUnit\Framework\TestCase;

class ClarkeYardTest extends TestCase
{
    public function testAsMetres(): void
    {
        $original = new ClarkeYard(0.1312347732106654);
        $asMetre = $original->asMetres();
        self::assertInstanceOf(Metre::class, $asMetre);
        self::assertEqualsWithDelta(0.12, $asMetre->getValue(), 0.00000000000001);
    }

    public function testGetValue(): void
    {
        $original = new ClarkeYard(0.12);
        self::assertEquals(0.12, $original->getValue());
    }

    public function testGetUnitName(): void
    {
        $original = new ClarkeYard(0.12);
        self::assertEquals('Clarke yard', $original->getUnitName());
    }

    public function testAdd(): void
    {
        $result = (new ClarkeYard(1))->add(new ClarkeYard(2));
        self::assertInstanceOf(ClarkeYard::class, $result);
        self::assertEquals(3, $result->getValue());
    }

    public function testSubtract(): void
    {
        $result = (new ClarkeYard(4))->subtract(new ClarkeYard(3));
        self::assertInstanceOf(ClarkeYard::class, $result);
        self::assertEquals(1, $result->getValue());
    }

    public function testMultiply(): void
    {
        $result = (new ClarkeYard(1))->multiply(2.5);
        self::assertInstanceOf(ClarkeYard::class, $result);
        self::assertEquals(2.5, $result->getValue());
    }

    public function testDivide(): void
    {
        $result = (new ClarkeYard(3))->divide(2);
        self::assertInstanceOf(ClarkeYard::class, $result);
        self::assertEquals(1.5, $result->getValue());
    }
}
