<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);
use PHPCoord\UnitOfMeasure\UnitOfMeasureFactory;

/** @internal */ return [
    'xAxisTranslation' => UnitOfMeasureFactory::makeUnit(-6.0, 'urn:ogc:def:uom:EPSG::1025'),
    'yAxisTranslation' => UnitOfMeasureFactory::makeUnit(-5.6, 'urn:ogc:def:uom:EPSG::1025'),
    'zAxisTranslation' => UnitOfMeasureFactory::makeUnit(20.1, 'urn:ogc:def:uom:EPSG::1025'),
    'xAxisRotation' => UnitOfMeasureFactory::makeUnit(-0.04, 'urn:ogc:def:uom:EPSG::1031'),
    'yAxisRotation' => UnitOfMeasureFactory::makeUnit(0.001, 'urn:ogc:def:uom:EPSG::1031'),
    'zAxisRotation' => UnitOfMeasureFactory::makeUnit(0.043, 'urn:ogc:def:uom:EPSG::1031'),
    'scaleDifference' => UnitOfMeasureFactory::makeUnit(-1.403, 'urn:ogc:def:uom:EPSG::1028'),
    'rateOfChangeOfXAxisTranslation' => UnitOfMeasureFactory::makeUnit(0.4, 'urn:ogc:def:uom:EPSG::1027'),
    'rateOfChangeOfYAxisTranslation' => UnitOfMeasureFactory::makeUnit(0.8, 'urn:ogc:def:uom:EPSG::1027'),
    'rateOfChangeOfZAxisTranslation' => UnitOfMeasureFactory::makeUnit(1.5, 'urn:ogc:def:uom:EPSG::1027'),
    'rateOfChangeOfXAxisRotation' => UnitOfMeasureFactory::makeUnit(0.004, 'urn:ogc:def:uom:EPSG::1032'),
    'rateOfChangeOfYAxisRotation' => UnitOfMeasureFactory::makeUnit(-0.001, 'urn:ogc:def:uom:EPSG::1032'),
    'rateOfChangeOfZAxisRotation' => UnitOfMeasureFactory::makeUnit(-0.003, 'urn:ogc:def:uom:EPSG::1032'),
    'rateOfChangeOfScaleDifference' => UnitOfMeasureFactory::makeUnit(-0.012, 'urn:ogc:def:uom:EPSG::1030'),
    'parameterReferenceEpoch' => UnitOfMeasureFactory::makeUnit(1998.0, 'urn:ogc:def:uom:EPSG::1029'),
];
