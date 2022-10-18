<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);
use PHPCoord\UnitOfMeasure\UnitOfMeasureFactory;

/** @internal */ return [
  'latitudeOfFalseOrigin' => [
    'reverses' => false,
    'value' => UnitOfMeasureFactory::makeUnit(35.2, 'urn:ogc:def:uom:EPSG::9110'),
  ],
  'longitudeOfFalseOrigin' => [
    'reverses' => false,
    'value' => UnitOfMeasureFactory::makeUnit(-119.0, 'urn:ogc:def:uom:EPSG::9110'),
  ],
  'latitudeOf1stStandardParallel' => [
    'reverses' => false,
    'value' => UnitOfMeasureFactory::makeUnit(37.15, 'urn:ogc:def:uom:EPSG::9110'),
  ],
  'latitudeOf2ndStandardParallel' => [
    'reverses' => false,
    'value' => UnitOfMeasureFactory::makeUnit(36.0, 'urn:ogc:def:uom:EPSG::9110'),
  ],
  'eastingAtFalseOrigin' => [
    'reverses' => false,
    'value' => UnitOfMeasureFactory::makeUnit(2000000.0, 'urn:ogc:def:uom:EPSG::9001'),
  ],
  'northingAtFalseOrigin' => [
    'reverses' => false,
    'value' => UnitOfMeasureFactory::makeUnit(500000.0, 'urn:ogc:def:uom:EPSG::9001'),
  ],
];
