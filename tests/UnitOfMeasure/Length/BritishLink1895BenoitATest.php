<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\UnitOfMeasure\Length;

use PHPUnit\Framework\TestCase;

class BritishLink1895BenoitATest extends TestCase
{
    public function testAsMetres(): void
    {
        $original = new BritishLink1895BenoitA(0.5965168664348628);
        $asMetre = $original->asMetres();
        self::assertInstanceOf(Metre::class, $asMetre);
        self::assertEquals(0.12, $asMetre->getValue());
    }

    public function testGetValue(): void
    {
        $original = new BritishLink1895BenoitA(0.12);
        self::assertEquals(0.12, $original->getValue());
    }

    public function testGetUnitName(): void
    {
        $original = new BritishLink1895BenoitA(0.12);
        self::assertEquals('British(1895 Benoit A) link', $original->getUnitName());
    }

    public function testAdd(): void
    {
        $result = (new BritishLink1895BenoitA(1))->add((new BritishLink1895BenoitA(2)));
        self::assertInstanceOf(BritishLink1895BenoitA::class, $result);
        self::assertEquals(3, $result->getValue());
    }

    public function testSubtract(): void
    {
        $result = (new BritishLink1895BenoitA(4))->subtract((new BritishLink1895BenoitA(3)));
        self::assertInstanceOf(BritishLink1895BenoitA::class, $result);
        self::assertEquals(1, $result->getValue());
    }

    public function testMultiply(): void
    {
        $result = (new BritishLink1895BenoitA(1))->multiply(2.5);
        self::assertInstanceOf(BritishLink1895BenoitA::class, $result);
        self::assertEquals(2.5, $result->getValue());
    }

    public function testDivide(): void
    {
        $result = (new BritishLink1895BenoitA(3))->divide(2);
        self::assertInstanceOf(BritishLink1895BenoitA::class, $result);
        self::assertEquals(1.5, $result->getValue());
    }
}
