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
  'longitudeOfNaturalOrigin' => UnitOfMeasureFactory::makeUnit(-88.2, 'urn:ogc:def:uom:EPSG::9110'),
  'scaleFactorAtNaturalOrigin' => UnitOfMeasureFactory::makeUnit(0.999975, 'urn:ogc:def:uom:EPSG::9201'),
  'falseEasting' => UnitOfMeasureFactory::makeUnit(300000.0, 'urn:ogc:def:uom:EPSG::9001'),
  'falseNorthing' => UnitOfMeasureFactory::makeUnit(0.0, 'urn:ogc:def:uom:EPSG::9001'),
];
