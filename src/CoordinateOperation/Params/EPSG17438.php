<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);
use PHPCoord\UnitOfMeasure\UnitOfMeasureFactory;

/** @internal */ return [
  'latitudeOfNaturalOrigin' => UnitOfMeasureFactory::makeUnit(0.0, 'urn:ogc:def:uom:EPSG::9102'),
  'longitudeOfNaturalOrigin' => UnitOfMeasureFactory::makeUnit(112.5, 'urn:ogc:def:uom:EPSG::9102'),
  'scaleFactorAtNaturalOrigin' => UnitOfMeasureFactory::makeUnit(0.9999, 'urn:ogc:def:uom:EPSG::9201'),
  'falseEasting' => UnitOfMeasureFactory::makeUnit(200000.0, 'urn:ogc:def:uom:EPSG::9001'),
  'falseNorthing' => UnitOfMeasureFactory::makeUnit(1500000.0, 'urn:ogc:def:uom:EPSG::9001'),
];
