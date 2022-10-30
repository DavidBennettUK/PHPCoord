<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);
use PHPCoord\UnitOfMeasure\UnitOfMeasureFactory;

/** @internal */ return [
  'latitudeOfNaturalOrigin' => UnitOfMeasureFactory::makeUnit(39.18, 'urn:ogc:def:uom:EPSG::9110'),
  'longitudeOfNaturalOrigin' => UnitOfMeasureFactory::makeUnit(-85.54, 'urn:ogc:def:uom:EPSG::9110'),
  'scaleFactorAtNaturalOrigin' => UnitOfMeasureFactory::makeUnit(1.00003, 'urn:ogc:def:uom:EPSG::9201'),
  'falseEasting' => UnitOfMeasureFactory::makeUnit(787400.0, 'urn:ogc:def:uom:EPSG::9003'),
  'falseNorthing' => UnitOfMeasureFactory::makeUnit(118110.0, 'urn:ogc:def:uom:EPSG::9003'),
];
