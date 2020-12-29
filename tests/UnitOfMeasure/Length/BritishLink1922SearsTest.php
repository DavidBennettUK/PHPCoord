<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\UnitOfMeasure\Length;

use PHPUnit\Framework\TestCase;

class BritishLink1922SearsTest extends TestCase
{
    public function testAsMetres(): void
    {
        $original = new BritishLink1922Sears(0.5965173787878788);
        $asMetre = $original->asMetres();
        self::assertInstanceOf(Metre::class, $asMetre);
        self::assertEquals(0.12, $asMetre->getValue());
    }

    public function testGetValue(): void
    {
        $original = new BritishLink1922Sears(0.12);
        self::assertEquals(0.12, $original->getValue());
    }

    public function testGetUnitName(): void
    {
        $original = new BritishLink1922Sears(0.12);
        self::assertEquals('British(1922 Sears) link', $original->getUnitName());
    }

    public function testAdd(): void
    {
        $result = (new BritishLink1922Sears(1))->add((new BritishLink1922Sears(2)));
        self::assertInstanceOf(BritishLink1922Sears::class, $result);
        self::assertEquals(3, $result->getValue());
    }

    public function testSubtract(): void
    {
        $result = (new BritishLink1922Sears(4))->subtract((new BritishLink1922Sears(3)));
        self::assertInstanceOf(BritishLink1922Sears::class, $result);
        self::assertEquals(1, $result->getValue());
    }

    public function testMultiply(): void
    {
        $result = (new BritishLink1922Sears(1))->multiply(2.5);
        self::assertInstanceOf(BritishLink1922Sears::class, $result);
        self::assertEquals(2.5, $result->getValue());
    }

    public function testDivide(): void
    {
        $result = (new BritishLink1922Sears(3))->divide(2);
        self::assertInstanceOf(BritishLink1922Sears::class, $result);
        self::assertEquals(1.5, $result->getValue());
    }
}
