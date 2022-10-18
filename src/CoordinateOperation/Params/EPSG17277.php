<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);
use PHPCoord\UnitOfMeasure\UnitOfMeasureFactory;

/** @internal */ return [
  'latitudeOfStandardParallel' => [
    'reverses' => false,
    'value' => UnitOfMeasureFactory::makeUnit(-80.1419, 'urn:ogc:def:uom:EPSG::9110'),
  ],
  'longitudeOfOrigin' => [
    'reverses' => false,
    'value' => UnitOfMeasureFactory::makeUnit(-105.0, 'urn:ogc:def:uom:EPSG::9102'),
  ],
  'falseEasting' => [
    'reverses' => false,
    'value' => UnitOfMeasureFactory::makeUnit(0.0, 'urn:ogc:def:uom:EPSG::9001'),
  ],
  'falseNorthing' => [
    'reverses' => false,
    'value' => UnitOfMeasureFactory::makeUnit(0.0, 'urn:ogc:def:uom:EPSG::9001'),
  ],
];
