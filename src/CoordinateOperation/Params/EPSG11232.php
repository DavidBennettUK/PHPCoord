<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);
use PHPCoord\UnitOfMeasure\UnitOfMeasureFactory;

/** @internal */ return [
  'latitudeOfNaturalOrigin' => UnitOfMeasureFactory::makeUnit(36.4, 'urn:ogc:def:uom:EPSG::9110'),
  'longitudeOfNaturalOrigin' => UnitOfMeasureFactory::makeUnit(-90.1, 'urn:ogc:def:uom:EPSG::9110'),
  'scaleFactorAtNaturalOrigin' => UnitOfMeasureFactory::makeUnit(0.999941177, 'urn:ogc:def:uom:EPSG::9201'),
  'falseEasting' => UnitOfMeasureFactory::makeUnit(700000.0, 'urn:ogc:def:uom:EPSG::9001'),
  'falseNorthing' => UnitOfMeasureFactory::makeUnit(0.0, 'urn:ogc:def:uom:EPSG::9001'),
];
