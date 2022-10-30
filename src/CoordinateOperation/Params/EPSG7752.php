<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);
use PHPCoord\UnitOfMeasure\UnitOfMeasureFactory;

/** @internal */ return [
  'latitudeOfNaturalOrigin' => UnitOfMeasureFactory::makeUnit(10.875, 'urn:ogc:def:uom:EPSG::9102'),
  'longitudeOfNaturalOrigin' => UnitOfMeasureFactory::makeUnit(78.375, 'urn:ogc:def:uom:EPSG::9102'),
  'scaleFactorAtNaturalOrigin' => UnitOfMeasureFactory::makeUnit(0.9997942, 'urn:ogc:def:uom:EPSG::9201'),
  'falseEasting' => UnitOfMeasureFactory::makeUnit(1000000.0, 'urn:ogc:def:uom:EPSG::9001'),
  'falseNorthing' => UnitOfMeasureFactory::makeUnit(1000000.0, 'urn:ogc:def:uom:EPSG::9001'),
];
