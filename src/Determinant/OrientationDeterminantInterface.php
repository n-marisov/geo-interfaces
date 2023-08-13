<?php

namespace Maris\Interfaces\Geo\Determinant;

use Maris\Interfaces\Geo\Model\LocationAggregateInterface;
use Maris\Interfaces\Geo\Model\LocationInterface;
use Maris\Interfaces\Geo\Model\PolylineAggregateInterface;
use Maris\Interfaces\Geo\Model\PolylineInterface;

/**
 * Определяет ориентацию фигур относительно друг друга.
 */
interface OrientationDeterminantInterface
{
    /**
     * Точка разводит полилинию против часовой стрелки.
     */
    public const ORIENTATION_ANTI_CLOCKWISE = -1;

    /**
     * Точка коллинеарна полилинии.
     */
    public const ORIENTATION_COLLINEAR = 0;

    /**
     * Точка разводит полилинию по часовой стрелки.
     */
    public const ORIENTATION_CLOCKWISE = 1;

    /***
     * Определяет ориентацию точки относительно полилинии.
     * Для расчета используется первая и последняя точка полилинии.
     * @param PolylineInterface|PolylineAggregateInterface $polyline
     * @param LocationAggregateInterface|LocationInterface $location
     * @return self::ORIENTATION_ANTI_CLOCKWISE | self::ORIENTATION_COLLINEAR | self::ORIENTATION_CLOCKWISE
     */
    public function determineOrientation( PolylineInterface|PolylineAggregateInterface $polyline, LocationAggregateInterface|LocationInterface $location ):int;
}