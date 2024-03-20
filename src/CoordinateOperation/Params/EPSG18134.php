<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);
use PHPCoord\UnitOfMeasure\UnitOfMeasureFactory;

/** @internal */ return [
    'latitudeOfNaturalOrigin' => UnitOfMeasureFactory::makeUnit(29.0, 'urn:ogc:def:uom:EPSG::9105'),
    'longitudeOfNaturalOrigin' => UnitOfMeasureFactory::makeUnit(-6.0, 'urn:ogc:def:uom:EPSG::9105'),
    'scaleFactorAtNaturalOrigin' => UnitOfMeasureFactory::makeUnit(0.999616304, 'urn:ogc:def:uom:EPSG::9201'),
    'falseEasting' => UnitOfMeasureFactory::makeUnit(1200000.0, 'urn:ogc:def:uom:EPSG::9001'),
    'falseNorthing' => UnitOfMeasureFactory::makeUnit(400000.0, 'urn:ogc:def:uom:EPSG::9001'),
];
