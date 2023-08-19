<?php

namespace Maris\Interfaces\Geo\Determinant;

use Maris\Interfaces\Geo\Aggregate\LocationAggregateInterface;
use Maris\Interfaces\Geo\Aggregate\PolylineAggregateInterface;
use Maris\Interfaces\Geo\Model\GeometryInterface;
use Maris\Interfaces\Geo\Model\LocationInterface;
use Maris\Interfaces\Geo\Model\PolylineInterface;

/**
 * Определяет пересечения фигур.
 */
interface IntersectionDeterminantInterface
{
    /**
     * Определяет пересечения любых фигур.
     * @param GeometryInterface $geometryOne
     * @param GeometryInterface $geometryTwo
     * @return bool
     */
    public function intersects( GeometryInterface $geometryOne, GeometryInterface $geometryTwo ):bool;

    /**
     * Определяет, пересекаются ли точки.
     * @param LocationAggregateInterface|LocationInterface $locationOne
     * @param LocationAggregateInterface|LocationInterface $locationTwo
     * @return bool
     */
    public function intersectLocationAndLocation(LocationAggregateInterface|LocationInterface $locationOne, LocationAggregateInterface|LocationInterface $locationTwo ):bool;


    /***
     * Определяет, принадлежит ли точка полилинии.
     * @param LocationAggregateInterface|LocationInterface $location
     * @param PolylineInterface|PolylineAggregateInterface $polyline
     * @return bool
     */
    public function intersectLocationAndPolyline( LocationAggregateInterface|LocationInterface $location, PolylineInterface|PolylineAggregateInterface $polyline ):bool;

    /***
     * Определяет, пересекаются ли полилинии.
     * @param PolylineInterface|PolylineAggregateInterface $polylineOne
     * @param PolylineInterface|PolylineAggregateInterface $polylineTwo
     * @return bool
     */
    public function intersectPolylineAndPolyline(PolylineInterface|PolylineAggregateInterface $polylineOne, PolylineInterface|PolylineAggregateInterface $polylineTwo):bool;
}