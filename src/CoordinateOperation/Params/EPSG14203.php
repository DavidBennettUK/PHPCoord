<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);
use PHPCoord\UnitOfMeasure\UnitOfMeasureFactory;

/** @internal */ return [
  'latitudeOfFalseOrigin' => UnitOfMeasureFactory::makeUnit(29.4, 'urn:ogc:def:uom:EPSG::9110'),
  'longitudeOfFalseOrigin' => UnitOfMeasureFactory::makeUnit(-100.2, 'urn:ogc:def:uom:EPSG::9110'),
  'latitudeOf1stStandardParallel' => UnitOfMeasureFactory::makeUnit(30.07, 'urn:ogc:def:uom:EPSG::9110'),
  'latitudeOf2ndStandardParallel' => UnitOfMeasureFactory::makeUnit(31.53, 'urn:ogc:def:uom:EPSG::9110'),
  'eastingAtFalseOrigin' => UnitOfMeasureFactory::makeUnit(2000000.0, 'urn:ogc:def:uom:EPSG::9003'),
  'northingAtFalseOrigin' => UnitOfMeasureFactory::makeUnit(0.0, 'urn:ogc:def:uom:EPSG::9003'),
];
