<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);
use PHPCoord\UnitOfMeasure\UnitOfMeasureFactory;

/** @internal */ return [
    'latitudeOfFalseOrigin' => UnitOfMeasureFactory::makeUnit(37.4, 'urn:ogc:def:uom:EPSG::9110'),
    'longitudeOfFalseOrigin' => UnitOfMeasureFactory::makeUnit(-77.0, 'urn:ogc:def:uom:EPSG::9110'),
    'latitudeOf1stStandardParallel' => UnitOfMeasureFactory::makeUnit(39.27, 'urn:ogc:def:uom:EPSG::9110'),
    'latitudeOf2ndStandardParallel' => UnitOfMeasureFactory::makeUnit(38.18, 'urn:ogc:def:uom:EPSG::9110'),
    'eastingAtFalseOrigin' => UnitOfMeasureFactory::makeUnit(400000.0, 'urn:ogc:def:uom:EPSG::9001'),
    'northingAtFalseOrigin' => UnitOfMeasureFactory::makeUnit(0.0, 'urn:ogc:def:uom:EPSG::9001'),
];
