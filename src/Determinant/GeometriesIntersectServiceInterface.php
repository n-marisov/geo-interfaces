<?php

namespace Maris\Interfaces\Geo\Determinant;

use Maris\Interfaces\Geo\Aggregate\GeometryAggregateInterface;
use Maris\Interfaces\Geo\Aggregate\LocationAggregateInterface;
use Maris\Interfaces\Geo\Model\GeometryInterface;
use Maris\Interfaces\Geo\Model\LocationInterface;

/***
 * Интерфейс сервиса который может сравнивать пересечение точек.
 */
interface GeometriesIntersectServiceInterface
{
    /**
     * Определяет пересечение двух любых географических фигур.
     * @param GeometryInterface|GeometryAggregateInterface $geometryOne
     * @param GeometryInterface|GeometryAggregateInterface $geometryTwo
     * @return bool
     */
    public function intersectGeometries( GeometryInterface|GeometryAggregateInterface $geometryOne, GeometryInterface|GeometryAggregateInterface $geometryTwo ):bool;

}