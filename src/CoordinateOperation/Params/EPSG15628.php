<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);
use PHPCoord\UnitOfMeasure\UnitOfMeasureFactory;

/** @internal */ return [
    'latitudeOffset' => UnitOfMeasureFactory::makeUnit(10.19, 'urn:ogc:def:uom:EPSG::9104'),
    'longitudeOffset' => UnitOfMeasureFactory::makeUnit(-12.74, 'urn:ogc:def:uom:EPSG::9104'),
    'geoidUndulation' => UnitOfMeasureFactory::makeUnit(40.3, 'urn:ogc:def:uom:EPSG::9001'),
];
