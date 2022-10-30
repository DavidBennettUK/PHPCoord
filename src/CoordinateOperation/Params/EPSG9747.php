<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);
use PHPCoord\UnitOfMeasure\UnitOfMeasureFactory;

/** @internal */ return [
  'latitudeOfNaturalOrigin' => UnitOfMeasureFactory::makeUnit(30.0, 'urn:ogc:def:uom:EPSG::9110'),
  'longitudeOfNaturalOrigin' => UnitOfMeasureFactory::makeUnit(-87.3, 'urn:ogc:def:uom:EPSG::9110'),
  'scaleFactorAtNaturalOrigin' => UnitOfMeasureFactory::makeUnit(0.999933333, 'urn:ogc:def:uom:EPSG::9201'),
  'falseEasting' => UnitOfMeasureFactory::makeUnit(1968500.0, 'urn:ogc:def:uom:EPSG::9003'),
  'falseNorthing' => UnitOfMeasureFactory::makeUnit(0.0, 'urn:ogc:def:uom:EPSG::9003'),
];
