<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\UnitOfMeasure\Length;

use PHPUnit\Framework\TestCase;

class ClarkeLinkTest extends TestCase
{
    public function testAsMetres(): void
    {
        $original = new ClarkeLink(0.5965216964121155);
        $asMetre = $original->asMetres();
        self::assertInstanceOf(Metre::class, $asMetre);
        self::assertEquals(0.12, $asMetre->getValue());
    }

    public function testGetValue(): void
    {
        $original = new ClarkeLink(0.12);
        self::assertEquals(0.12, $original->getValue());
    }

    public function testGetUnitName(): void
    {
        $original = new ClarkeLink(0.12);
        self::assertEquals("Clarke's link", $original->getUnitName());
    }

    public function testAdd(): void
    {
        $result = (new ClarkeLink(1))->add(new ClarkeLink(2));
        self::assertInstanceOf(ClarkeLink::class, $result);
        self::assertEquals(3, $result->getValue());
    }

    public function testSubtract(): void
    {
        $result = (new ClarkeLink(4))->subtract(new ClarkeLink(3));
        self::assertInstanceOf(ClarkeLink::class, $result);
        self::assertEquals(1, $result->getValue());
    }

    public function testMultiply(): void
    {
        $result = (new ClarkeLink(1))->multiply(2.5);
        self::assertInstanceOf(ClarkeLink::class, $result);
        self::assertEquals(2.5, $result->getValue());
    }

    public function testDivide(): void
    {
        $result = (new ClarkeLink(3))->divide(2);
        self::assertInstanceOf(ClarkeLink::class, $result);
        self::assertEquals(1.5, $result->getValue());
    }
}
