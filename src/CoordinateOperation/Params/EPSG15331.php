<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);
use PHPCoord\UnitOfMeasure\UnitOfMeasureFactory;

/** @internal */ return [
  'latitudeOfFalseOrigin' => UnitOfMeasureFactory::makeUnit(41.0, 'urn:ogc:def:uom:EPSG::9110'),
  'longitudeOfFalseOrigin' => UnitOfMeasureFactory::makeUnit(-71.3, 'urn:ogc:def:uom:EPSG::9110'),
  'latitudeOf1stStandardParallel' => UnitOfMeasureFactory::makeUnit(42.41, 'urn:ogc:def:uom:EPSG::9110'),
  'latitudeOf2ndStandardParallel' => UnitOfMeasureFactory::makeUnit(41.43, 'urn:ogc:def:uom:EPSG::9110'),
  'eastingAtFalseOrigin' => UnitOfMeasureFactory::makeUnit(656166.667, 'urn:ogc:def:uom:EPSG::9003'),
  'northingAtFalseOrigin' => UnitOfMeasureFactory::makeUnit(2460625.0, 'urn:ogc:def:uom:EPSG::9003'),
];
