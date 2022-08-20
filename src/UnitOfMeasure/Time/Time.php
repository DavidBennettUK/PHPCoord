<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\UnitOfMeasure\Time;

use PHPCoord\Exception\UnknownUnitOfMeasureException;
use PHPCoord\UnitOfMeasure\UnitOfMeasure;

abstract class Time implements UnitOfMeasure
{
    /**
     * year.
     */
    public const EPSG_YEAR = 'urn:ogc:def:uom:EPSG::1029';

    protected static array $sridData = [
        'urn:ogc:def:uom:EPSG::1029' => [
            'name' => 'year',
        ],
    ];

    protected static array $customSridData = [];

    private static array $supportedCache = [];

    abstract public function __construct(float $time);

    abstract public function asYears(): Year;

    public function add(self $unit): self
    {
        $resultAsYears = new Year($this->asYears()->getValue() + $unit->asYears()->getValue());
        $conversionRatio = (new static(1))->asYears()->getValue();

        return new static($resultAsYears->getValue() / $conversionRatio);
    }

    public function subtract(self $unit): self
    {
        $resultAsYears = new Year($this->asYears()->getValue() - $unit->asYears()->getValue());
        $conversionRatio = (new static(1))->asYears()->getValue();

        return new static($resultAsYears->getValue() / $conversionRatio);
    }

    public function multiply(float $multiplicand): self
    {
        return new static($this->getValue() * $multiplicand);
    }

    public function divide(float $divisor): self
    {
        return new static($this->getValue() / $divisor);
    }

    public static function makeUnit(float $measurement, string $srid): self
    {
        if (isset(self::$customSridData[$srid])) {
            return new self::$customSridData[$srid]['fqcn']($measurement);
        }

        return match ($srid) {
            self::EPSG_YEAR => new Year($measurement),
            default => throw new UnknownUnitOfMeasureException($srid),
        };
    }

    public static function getSupportedSRIDs(): array
    {
        if (!self::$supportedCache) {
            foreach (static::$sridData as $srid => $data) {
                self::$supportedCache[$srid] = $data['name'];
            }
        }

        return self::$supportedCache;
    }

    public static function registerCustomUnit(string $srid, string $name, string $implementingClassFQCN): void
    {
        self::$customSridData[$srid] = ['name' => $name, 'fqcn' => $implementingClassFQCN];
        self::getSupportedSRIDs(); // init cache if not already
        self::$supportedCache[$srid] = $name; // update cache
    }

    public function __toString(): string
    {
        return (string) $this->getValue();
    }
}
