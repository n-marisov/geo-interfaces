<?php

namespace Maris\Interfaces\Geo\Determinant;

use Maris\Interfaces\Geo\Aggregate\BoundsAggregateInterface;
use Maris\Interfaces\Geo\Aggregate\GeometryAggregateInterface;
use Maris\Interfaces\Geo\Model\BoundsInterface;
use Maris\Interfaces\Geo\Model\GeometryInterface;

/***
 * Интерфейс сервиса который может сравнивать объекты границ.
 */
interface BoundsIntersectServiceInterface
{
    /**
     * Определяет, пересекаются объекты границ.
     * @param BoundsInterface|BoundsAggregateInterface $boundsOne
     * @param BoundsInterface|BoundsAggregateInterface $boundsTwo
     * @return bool
     */
    public function intersectBounds( BoundsInterface|BoundsAggregateInterface $boundsOne, BoundsInterface|BoundsAggregateInterface $boundsTwo ):bool;

    /***
     * Определяет пересечение географической фигуры и объекта границ.
     * @param GeometryInterface|GeometryAggregateInterface $geometry
     * @param BoundsInterface $bounds
     * @return bool
     */
    public function intersectGeometryAndBounds( GeometryInterface|GeometryAggregateInterface $geometry, BoundsInterface $bounds ):bool;
}