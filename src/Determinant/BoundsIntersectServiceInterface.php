<?php

namespace Maris\Interfaces\Geo\Determinant;

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
     * @param BoundsInterface $boundsOne
     * @param BoundsInterface $boundsTwo
     * @return bool
     */
    public function intersectBounds( BoundsInterface $boundsOne, BoundsInterface $boundsTwo ):bool;

    /***
     * Определяет пересечение географической фигуры и объекта границ.
     * @param GeometryInterface|GeometryAggregateInterface $geometry
     * @param BoundsInterface $bounds
     * @return bool
     */
    public function intersectGeometryAndBounds( GeometryInterface|GeometryAggregateInterface $geometry, BoundsInterface $bounds ):bool;
}