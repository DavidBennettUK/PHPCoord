<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateReferenceSystem;

use PHPCoord\CoordinateSystem\CoordinateSystem;
use PHPCoord\Datum\Datum;
use PHPCoord\Exception\UnknownCoordinateReferenceSystemException;
use PHPCoord\Geometry\BoundingArea;

use function array_merge;

abstract class CoordinateReferenceSystem
{
    public const CRS_TYPE_COMPOUND = 'compound';

    public const CRS_TYPE_DERIVED = 'derived';

    public const CRS_TYPE_DYNAMIC_GEOCENTRIC = 'dynamic geocentric';

    public const CRS_TYPE_DYNAMIC_GEOGRAPHIC_2D = 'dynamic geographic 2D';

    public const CRS_TYPE_DYNAMIC_GEOGRAPHIC_3D = 'dynamic geographic 3D';

    public const CRS_TYPE_DYNAMIC_VERTICAL = 'dynamic vertical';

    public const CRS_TYPE_ENGINEERING = 'engineering';

    public const CRS_TYPE_GEOCENTRIC = 'geocentric';

    public const CRS_TYPE_GEOGRAPHIC_2D = 'geographic 2D';

    public const CRS_TYPE_GEOGRAPHIC_3D = 'geographic 3D';

    public const CRS_TYPE_PROJECTED = 'projected';

    public const CRS_TYPE_VERTICAL = 'vertical';

    public const CRS_SRID_PREFIX_EPSG = 'urn:ogc:def:crs:EPSG::';

    protected string $srid;

    protected string $name;

    protected CoordinateSystem $coordinateSystem;

    protected Datum $datum;

    protected BoundingArea $boundingArea;

    /**
     * @var array<string, Compound|Geocentric|Geographic2D|Geographic3D|Projected|Vertical>
     */
    private static array $cachedObjects = [
    ];

    public function getSRID(): string
    {
        return $this->srid;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCoordinateSystem(): CoordinateSystem
    {
        return $this->coordinateSystem;
    }

    public function getDatum(): Datum
    {
        return $this->datum;
    }

    public function getBoundingArea(): BoundingArea
    {
        return $this->boundingArea;
    }

    public static function fromSRID(string $srid): Compound|Geocentric|Geographic2D|Geographic3D|Projected|Vertical
    {
        if (!isset(self::$cachedObjects[$srid])) {
            try {
                self::$cachedObjects[$srid] = Projected::fromSRID($srid);
            } catch (UnknownCoordinateReferenceSystemException) {
                try {
                    self::$cachedObjects[$srid] = Geographic2D::fromSRID($srid);
                } catch (UnknownCoordinateReferenceSystemException) {
                    try {
                        self::$cachedObjects[$srid] = Geographic3D::fromSRID($srid);
                    } catch (UnknownCoordinateReferenceSystemException) {
                        try {
                            self::$cachedObjects[$srid] = Geocentric::fromSRID($srid);
                        } catch (UnknownCoordinateReferenceSystemException) {
                            try {
                                self::$cachedObjects[$srid] = Vertical::fromSRID($srid);
                            } catch (UnknownCoordinateReferenceSystemException) {
                                try {
                                    self::$cachedObjects[$srid] = Compound::fromSRID($srid);
                                } catch (UnknownCoordinateReferenceSystemException) {
                                    throw new UnknownCoordinateReferenceSystemException($srid);
                                }
                            }
                        }
                    }
                }
            }
        }

        return self::$cachedObjects[$srid];
    }

    /**
     * @return array<string, string>
     */
    public static function getSupportedSRIDs(): array
    {
        return array_merge(Compound::getSupportedSRIDs(), Geocentric::getSupportedSRIDs(), Geographic2D::getSupportedSRIDs(), Geographic3D::getSupportedSRIDs(), Projected::getSupportedSRIDs(), Vertical::getSupportedSRIDs());
    }

    /**
     * @return array<string, array{name: string, extent_description: string, help: string}>
     */
    public static function getSupportedSRIDsWithHelp(): array
    {
        return array_merge(Compound::getSupportedSRIDsWithHelp(), Geocentric::getSupportedSRIDsWithHelp(), Geographic2D::getSupportedSRIDsWithHelp(), Geographic3D::getSupportedSRIDsWithHelp(), Projected::getSupportedSRIDsWithHelp(), Vertical::getSupportedSRIDsWithHelp());
    }
}
