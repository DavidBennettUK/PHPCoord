<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

use function explode;
use function max;
use function min;
use const PHP_FLOAT_MAX;
use const PHP_FLOAT_MIN;
use PHPCoord\UnitOfMeasure\Length\Metre;
use function round;
use SplFileObject;
use SplFixedArray;
use function str_replace;
use function trim;

class GUGiKHeightGrid extends GeographicGeoidHeightGrid
{
    use BilinearInterpolation;

    private SplFixedArray $data;

    public function __construct($filename)
    {
        $this->storageOrder = self::STORAGE_ORDER_INCREASING_LONGITUDE_INCREASING_LATIITUDE;
        $this->gridFile = new SplFileObject($filename);
        $this->columnGridInterval = 0.01; // always
        $this->rowGridInterval = 0.01; // always

        // these files have variable length headers, and then are not rectangular!!
        do {
            $headerLine = str_replace(self::BOM, '', $this->gridFile->fgets());
        } while ($headerLine && $headerLine[0] === '#');

        $firstDataRowIndex = $this->gridFile->key() + 1;

        $startX = PHP_FLOAT_MAX;
        $endX = PHP_FLOAT_MIN;
        $startY = PHP_FLOAT_MAX;
        $endY = PHP_FLOAT_MIN;
        while ($row = $this->gridFile->fgets()) {
            $data = explode("\t", trim($row));
            $startX = min($startX, (float) $data[1]);
            $endX = max($endX, (float) $data[1]);
            $startY = min($startY, (float) $data[0]);
            $endY = max($endY, (float) $data[0]);
        }

        $this->startX = $startX;
        $this->startY = $startY;
        $this->numberOfColumns = (int) (string) (($endX - $startX) / $this->columnGridInterval) + 1;
        $this->numberOfRows = (int) (string) (($endY - $startY) / $this->rowGridInterval) + 1;

        // init with 0
        $this->data = new SplFixedArray($this->numberOfColumns * $this->numberOfRows);
        for ($i = 0, $numValues = $this->numberOfColumns * $this->numberOfRows; $i < $numValues; ++$i) {
            $this->data[$i] = 0;
        }

        // fill in with actual values
        $this->gridFile->seek($firstDataRowIndex);
        while ($row = $this->gridFile->fgets()) {
            $rowData = explode("\t", trim($row));

            $index = round((($rowData[0] - $this->startY) / $this->rowGridInterval) * $this->numberOfColumns + ($rowData[1] - $this->startX) / $this->columnGridInterval);
            $this->data[$index] = (float) $rowData[2];
        }
    }

    /**
     * @return Metre[]
     */
    public function getValues($x, $y): array
    {
        $shift = $this->interpolate($x, $y)[0];

        return [new Metre($shift)];
    }

    protected function getRecord(int $longitudeIndex, int $latitudeIndex): GridValues
    {
        $recordId = $latitudeIndex * $this->numberOfColumns + $longitudeIndex;

        $record = $this->data[$recordId];

        $longitude = $longitudeIndex * $this->columnGridInterval + $this->startX;
        $latitude = $latitudeIndex * $this->rowGridInterval + $this->startY;

        return new GridValues($longitude, $latitude, [$record]);
    }
}
