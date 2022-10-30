<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);
use PHPCoord\UnitOfMeasure\UnitOfMeasureFactory;

/** @internal */ return [
  'latitudeOfFalseOrigin' => UnitOfMeasureFactory::makeUnit(90.0, 'urn:ogc:def:uom:EPSG::9110'),
  'longitudeOfFalseOrigin' => UnitOfMeasureFactory::makeUnit(0.0, 'urn:ogc:def:uom:EPSG::9110'),
  'latitudeOf1stStandardParallel' => UnitOfMeasureFactory::makeUnit(49.5, 'urn:ogc:def:uom:EPSG::9110'),
  'latitudeOf2ndStandardParallel' => UnitOfMeasureFactory::makeUnit(51.1, 'urn:ogc:def:uom:EPSG::9110'),
  'eastingAtFalseOrigin' => UnitOfMeasureFactory::makeUnit(150000.0, 'urn:ogc:def:uom:EPSG::9001'),
  'northingAtFalseOrigin' => UnitOfMeasureFactory::makeUnit(5400000.0, 'urn:ogc:def:uom:EPSG::9001'),
];
