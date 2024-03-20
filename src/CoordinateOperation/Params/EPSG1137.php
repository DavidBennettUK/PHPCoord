<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);
use PHPCoord\UnitOfMeasure\UnitOfMeasureFactory;

/** @internal */ return [
    'xAxisTranslation' => UnitOfMeasureFactory::makeUnit(-130.0, 'urn:ogc:def:uom:EPSG::9001'),
    'yAxisTranslation' => UnitOfMeasureFactory::makeUnit(-117.0, 'urn:ogc:def:uom:EPSG::9001'),
    'zAxisTranslation' => UnitOfMeasureFactory::makeUnit(-151.0, 'urn:ogc:def:uom:EPSG::9001'),
];
