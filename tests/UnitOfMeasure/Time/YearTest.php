<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\UnitOfMeasure\Time;

use PHPUnit\Framework\TestCase;

class YearTest extends TestCase
{
    public function testAsSeconds(): void
    {
        $original = new Year(1);
        $asSecond = $original->asSeconds();
        self::assertInstanceOf(Second::class, $asSecond);
        self::assertEquals(31556925.445, $asSecond->getValue());
    }

    public function testGetValue(): void
    {
        $original = new Year(120000);
        self::assertEquals(120000, $original->getValue());
    }

    public function testGetFormattedValue(): void
    {
        $original = new Year(120000);
        self::assertEquals('120000 years', $original->getFormattedValue());
    }

    public function testGetUnitName(): void
    {
        $original = new Year(120000);
        self::assertEquals('year', $original->getUnitName());
    }

    public function testAdd(): void
    {
        $result = (new Year(1))->add((new Year(2)));
        self::assertInstanceOf(Year::class, $result);
        self::assertEquals(3, $result->getValue());
    }

    public function testSubtract(): void
    {
        $result = (new Year(4))->subtract((new Year(3)));
        self::assertInstanceOf(Year::class, $result);
        self::assertEquals(1, $result->getValue());
    }

    public function testMultiply(): void
    {
        $result = (new Year(1))->multiply(2.5);
        self::assertInstanceOf(Year::class, $result);
        self::assertEquals(2.5, $result->getValue());
    }

    public function testDivide(): void
    {
        $result = (new Year(3))->divide(2);
        self::assertInstanceOf(Year::class, $result);
        self::assertEquals(1.5, $result->getValue());
    }
}
