<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);
use PHPCoord\UnitOfMeasure\UnitOfMeasureFactory;

/** @internal */ return [
    'ordinate1OfEvaluationPoint' => UnitOfMeasureFactory::makeUnit(46.01, 'urn:ogc:def:uom:EPSG::9110'),
    'ordinate2OfEvaluationPoint' => UnitOfMeasureFactory::makeUnit(24.49, 'urn:ogc:def:uom:EPSG::9110'),
    'verticalOffset' => UnitOfMeasureFactory::makeUnit(0.062, 'urn:ogc:def:uom:EPSG::9001'),
    'inclinationInLatitude' => UnitOfMeasureFactory::makeUnit(-0.005, 'urn:ogc:def:uom:EPSG::9104'),
    'inclinationInLongitude' => UnitOfMeasureFactory::makeUnit(0.008, 'urn:ogc:def:uom:EPSG::9104'),
    'EPSGCodeForHorizontalCRS' => 'urn:ogc:def:crs:EPSG::4258',
];
