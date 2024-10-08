<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

/**
 * @internal
 */
class CRSTransformationsArctic
{
    /**
     * @var array<array{operation: string, name: string, source_crs: string, target_crs: string, accuracy: float}>
     */
    protected static array $sridData = [
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5989',
            'name' => 'EPSG Arctic LCC zone 2-22',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4258',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6069',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5993',
            'name' => 'EPSG Arctic LCC zone 3-11',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4258',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6070',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6012',
            'name' => 'EPSG Arctic LCC zone 4-26',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4258',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6071',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6013',
            'name' => 'EPSG Arctic LCC zone 4-28',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4258',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6072',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6020',
            'name' => 'EPSG Arctic LCC zone 5-11',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4258',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6073',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6021',
            'name' => 'EPSG Arctic LCC zone 5-13',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4258',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6074',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6038',
            'name' => 'EPSG Arctic LCC zone 5-47',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4258',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6125',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5906',
            'name' => 'EPSG Arctic Regional LCC zone A1',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::5921',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5907',
            'name' => 'EPSG Arctic Regional LCC zone A2',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::5922',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5908',
            'name' => 'EPSG Arctic Regional LCC zone A3',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::5923',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5909',
            'name' => 'EPSG Arctic Regional LCC zone A4',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::5924',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5910',
            'name' => 'EPSG Arctic Regional LCC zone A5',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::5925',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5911',
            'name' => 'EPSG Arctic Regional LCC zone B1',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::5926',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5912',
            'name' => 'EPSG Arctic Regional LCC zone B2',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::5927',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5913',
            'name' => 'EPSG Arctic Regional LCC zone B3',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::5928',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5914',
            'name' => 'EPSG Arctic Regional LCC zone B4',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::5929',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5915',
            'name' => 'EPSG Arctic Regional LCC zone B5',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::5930',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5916',
            'name' => 'EPSG Arctic Regional LCC zone C1',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::5931',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5917',
            'name' => 'EPSG Arctic Regional LCC zone C2',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::5932',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5918',
            'name' => 'EPSG Arctic Regional LCC zone C3',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::5933',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5919',
            'name' => 'EPSG Arctic Regional LCC zone C4',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::5934',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5920',
            'name' => 'EPSG Arctic Regional LCC zone C5',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::5935',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5990',
            'name' => 'EPSG Arctic LCC zone 2-24',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6075',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5991',
            'name' => 'EPSG Arctic LCC zone 2-26',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6076',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5994',
            'name' => 'EPSG Arctic LCC zone 3-13',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6077',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5995',
            'name' => 'EPSG Arctic LCC zone 3-15',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6078',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5996',
            'name' => 'EPSG Arctic LCC zone 3-17',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6079',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5997',
            'name' => 'EPSG Arctic LCC zone 3-19',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6080',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6014',
            'name' => 'EPSG Arctic LCC zone 4-30',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6081',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6015',
            'name' => 'EPSG Arctic LCC zone 4-32',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6082',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6016',
            'name' => 'EPSG Arctic LCC zone 4-34',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6083',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6017',
            'name' => 'EPSG Arctic LCC zone 4-36',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6084',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6018',
            'name' => 'EPSG Arctic LCC zone 4-38',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6085',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6019',
            'name' => 'EPSG Arctic LCC zone 4-40',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6086',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6022',
            'name' => 'EPSG Arctic LCC zone 5-15',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6087',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6023',
            'name' => 'EPSG Arctic LCC zone 5-17',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6088',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6024',
            'name' => 'EPSG Arctic LCC zone 5-19',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6089',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6025',
            'name' => 'EPSG Arctic LCC zone 5-21',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6090',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6026',
            'name' => 'EPSG Arctic LCC zone 5-23',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6091',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6027',
            'name' => 'EPSG Arctic LCC zone 5-25',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6092',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6028',
            'name' => 'EPSG Arctic LCC zone 5-27',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6093',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5980',
            'name' => 'EPSG Arctic LCC zone 1-27',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6115',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5981',
            'name' => 'EPSG Arctic LCC zone 1-29',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6116',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5982',
            'name' => 'EPSG Arctic LCC zone 1-31',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6117',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5977',
            'name' => 'EPSG Arctic LCC zone 1-21',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6118',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5992',
            'name' => 'EPSG Arctic LCC zone 2-28',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6119',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5983',
            'name' => 'EPSG Arctic LCC zone 2-10',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6120',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5984',
            'name' => 'EPSG Arctic LCC zone 2-12',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6121',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5998',
            'name' => 'EPSG Arctic LCC zone 3-21',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6122',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5999',
            'name' => 'EPSG Arctic LCC zone 3-23',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6123',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6005',
            'name' => 'EPSG Arctic LCC zone 4-12',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4326',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6124',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5978',
            'name' => 'EPSG Arctic LCC zone 1-23',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4617',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6098',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5985',
            'name' => 'EPSG Arctic LCC zone 2-14',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4617',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6099',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5986',
            'name' => 'EPSG Arctic LCC zone 2-16',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4617',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6100',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6000',
            'name' => 'EPSG Arctic LCC zone 3-25',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4617',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6101',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6001',
            'name' => 'EPSG Arctic LCC zone 3-27',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4617',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6102',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6002',
            'name' => 'EPSG Arctic LCC zone 3-29',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4617',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6103',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6006',
            'name' => 'EPSG Arctic LCC zone 4-14',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4617',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6104',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6007',
            'name' => 'EPSG Arctic LCC zone 4-16',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4617',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6105',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6008',
            'name' => 'EPSG Arctic LCC zone 4-18',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4617',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6106',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6031',
            'name' => 'EPSG Arctic LCC zone 5-33',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4617',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6107',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6032',
            'name' => 'EPSG Arctic LCC zone 5-35',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4617',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6108',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6033',
            'name' => 'EPSG Arctic LCC zone 5-37',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4617',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6109',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6034',
            'name' => 'EPSG Arctic LCC zone 5-39',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4617',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6110',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6041',
            'name' => 'EPSG Arctic LCC zone 6-18',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4617',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6111',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6042',
            'name' => 'EPSG Arctic LCC zone 6-20',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4617',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6112',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6043',
            'name' => 'EPSG Arctic LCC zone 6-22',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4617',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6113',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6044',
            'name' => 'EPSG Arctic LCC zone 6-24',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4617',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6114',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5979',
            'name' => 'EPSG Arctic LCC zone 1-25',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4747',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6050',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5987',
            'name' => 'EPSG Arctic LCC zone 2-18',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4747',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6051',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5988',
            'name' => 'EPSG Arctic LCC zone 2-20',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4747',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6052',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6002',
            'name' => 'EPSG Arctic LCC zone 3-29',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4747',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6053',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6003',
            'name' => 'EPSG Arctic LCC zone 3-31',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4747',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6054',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6004',
            'name' => 'EPSG Arctic LCC zone 3-33',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4747',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6055',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6009',
            'name' => 'EPSG Arctic LCC zone 4-20',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4747',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6056',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6010',
            'name' => 'EPSG Arctic LCC zone 4-22',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4747',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6057',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6011',
            'name' => 'EPSG Arctic LCC zone 4-24',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4747',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6058',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6035',
            'name' => 'EPSG Arctic LCC zone 5-41',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4747',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6059',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6036',
            'name' => 'EPSG Arctic LCC zone 5-43',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4747',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6060',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6037',
            'name' => 'EPSG Arctic LCC zone 5-45',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4747',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6061',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6045',
            'name' => 'EPSG Arctic LCC zone 6-26',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4747',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6062',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6046',
            'name' => 'EPSG Arctic LCC zone 6-28',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4747',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6063',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6047',
            'name' => 'EPSG Arctic LCC zone 6-30',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4747',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6064',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6048',
            'name' => 'EPSG Arctic LCC zone 7-11',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4747',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6065',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6049',
            'name' => 'EPSG Arctic LCC zone 7-13',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4747',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6066',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5943',
            'name' => 'EPSG Arctic LCC zone 8-20',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4747',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6067',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::5944',
            'name' => 'EPSG Arctic LCC zone 8-22',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4747',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6068',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6029',
            'name' => 'EPSG Arctic LCC zone 5-29',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4759',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6094',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6030',
            'name' => 'EPSG Arctic LCC zone 5-31',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4759',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6095',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6039',
            'name' => 'EPSG Arctic LCC zone 6-14',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4759',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6096',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6040',
            'name' => 'EPSG Arctic LCC zone 6-16',
            'source_crs' => 'urn:ogc:def:crs:EPSG::4759',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6097',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6029',
            'name' => 'EPSG Arctic LCC zone 5-29',
            'source_crs' => 'urn:ogc:def:crs:EPSG::6318',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6351',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6030',
            'name' => 'EPSG Arctic LCC zone 5-31',
            'source_crs' => 'urn:ogc:def:crs:EPSG::6318',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6352',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6039',
            'name' => 'EPSG Arctic LCC zone 6-14',
            'source_crs' => 'urn:ogc:def:crs:EPSG::6318',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6353',
            'accuracy' => 0,
        ],
        [
            'operation' => 'urn:ogc:def:coordinateOperation:EPSG::6040',
            'name' => 'EPSG Arctic LCC zone 6-16',
            'source_crs' => 'urn:ogc:def:crs:EPSG::6318',
            'target_crs' => 'urn:ogc:def:crs:EPSG::6354',
            'accuracy' => 0,
        ],
    ];

    /**
     * @return array<array{operation: string, name: string, source_crs: string, target_crs: string, accuracy: float}>
     */
    public static function getSupportedTransformations(): array
    {
        return static::$sridData;
    }
}
