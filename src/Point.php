<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord;

use DateTimeImmutable;
use PHPCoord\CoordinateReferenceSystem\CoordinateReferenceSystem;
use PHPCoord\CoordinateSystem\Axis;
use PHPCoord\UnitOfMeasure\Angle\Angle;
use PHPCoord\UnitOfMeasure\Length\Length;
use PHPCoord\UnitOfMeasure\Scale\Coefficient;
use PHPCoord\UnitOfMeasure\UnitOfMeasure;
use Stringable;

abstract class Point implements Stringable
{
    protected const NEWTON_RAPHSON_CONVERGENCE = 1e-16;

    abstract public function getCRS(): CoordinateReferenceSystem;

    abstract public function getCoordinateEpoch(): ?DateTimeImmutable;

    abstract public function calculateDistance(self $to): Length;

    protected function getAxisByName(string $name): ?Axis
    {
        foreach ($this->getCRS()->getCoordinateSystem()->getAxes() as $axis) {
            if ($axis->getName() === $name) {
                return $axis;
            }
        }

        return null;
    }

    protected static function sign(float $number): int
    {
        if ($number < 0) {
            return -1;
        }

        return 1;
    }

    /**
     * General polynomial.
     * @param Coefficient[] $powerCoefficients
     */
    protected function generalPolynomialUnitless(
        float $xs,
        float $ys,
        UnitOfMeasure $ordinate1OfEvaluationPointInSourceCRS,
        UnitOfMeasure $ordinate2OfEvaluationPointInSourceCRS,
        UnitOfMeasure $ordinate1OfEvaluationPointInTargetCRS,
        UnitOfMeasure $ordinate2OfEvaluationPointInTargetCRS,
        Scale $scalingFactorForSourceCRSCoordDifferences,
        Scale $scalingFactorForTargetCRSCoordDifferences,
        Scale $A0,
        Scale $B0,
        array $powerCoefficients
    ): array {
        $xso = $ordinate1OfEvaluationPointInSourceCRS->getValue();
        $yso = $ordinate2OfEvaluationPointInSourceCRS->getValue();
        $xto = $ordinate1OfEvaluationPointInTargetCRS->getValue();
        $yto = $ordinate2OfEvaluationPointInTargetCRS->getValue();

        $U = $scalingFactorForSourceCRSCoordDifferences->asUnity()->getValue() * ($xs - $xso);
        $V = $scalingFactorForSourceCRSCoordDifferences->asUnity()->getValue() * ($ys - $yso);

        $mTdX = $A0->getValue();
        foreach ($powerCoefficients as $coefficientName => $coefficientValue) {
            if ($coefficientName[0] === 'A') {
                sscanf($coefficientName, 'Au%dv%d', $uPower, $vPower);
                $mTdX += $coefficientValue->getValue() * $U ** $uPower * $V ** $vPower;
            }
        }

        $mTdY = $B0->getValue();
        foreach ($powerCoefficients as $coefficientName => $coefficientValue) {
            if ($coefficientName[0] === 'B') {
                sscanf($coefficientName, 'Bu%dv%d', $uPower, $vPower);
                $mTdY += $coefficientValue->getValue() * $U ** $uPower * $V ** $vPower;
            }
        }

        $xt = $xs - $xso + $xto + $mTdX / $scalingFactorForTargetCRSCoordDifferences->asUnity()->getValue();
        $yt = $ys - $yso + $yto + $mTdY / $scalingFactorForTargetCRSCoordDifferences->asUnity()->getValue();

        return ['xt' => $xt, 'yt' => $yt];
    }

    /**
     * Reversible polynomial.
     */
    protected function reversiblePolynomialUnitless(
        float $xs,
        float $ys,
        Angle $ordinate1OfEvaluationPoint,
        Angle $ordinate2OfEvaluationPoint,
        Scale $scalingFactorForCoordDifferences,
        Scale $A0,
        Scale $B0,
        array $powerCoefficients
    ): array {
        $xo = $ordinate1OfEvaluationPoint->getValue();
        $yo = $ordinate2OfEvaluationPoint->getValue();

        $U = $scalingFactorForCoordDifferences->asUnity()->getValue() * ($xs - $xo);
        $V = $scalingFactorForCoordDifferences->asUnity()->getValue() * ($ys - $yo);

        $mTdX = $A0->getValue();
        foreach ($powerCoefficients as $coefficientName => $coefficientValue) {
            if ($coefficientName[0] === 'A') {
                sscanf($coefficientName, 'Au%dv%d', $uPower, $vPower);
                $mTdX += $coefficientValue->getValue() * $U ** $uPower * $V ** $vPower;
            }
        }

        $mTdY = $B0->getValue();
        foreach ($powerCoefficients as $coefficientName => $coefficientValue) {
            if ($coefficientName[0] === 'B') {
                sscanf($coefficientName, 'Bu%dv%d', $uPower, $vPower);
                $mTdY += $coefficientValue->getValue() * $U ** $uPower * $V ** $vPower;
            }
        }

        $xt = $xs + $mTdX * $scalingFactorForCoordDifferences->asUnity()->getValue();
        $yt = $ys + $mTdY * $scalingFactorForCoordDifferences->asUnity()->getValue();

        return ['xt' => $xt, 'yt' => $yt];
    }

    /**
     * Floating point vagaries mean that it's possible for inputs to be e.g. 1.00000000000001 which makes PHP give a
     * silent NaN as output so inputs need to be capped. atan/atan2 are not affected, they seem to cap internally.
     */
    protected static function acos(float $num): float
    {
        if ($num > 1.0) {
            $num = 1.0;
        } elseif ($num < -1) {
            $num = -1.0;
        }

        return acos($num);
    }

    /**
     * Floating point vagaries mean that it's possible for inputs to be e.g. 1.00000000000001 which makes PHP give a
     * silent NaN as output so inputs need to be capped. atan/atan2 are not affected, they seem to cap internally.
     */
    protected static function asin(float $num): float
    {
        if ($num > 1.0) {
            $num = 1.0;
        } elseif ($num < -1.0) {
            $num = -1.0;
        }

        return asin($num);
    }
}
