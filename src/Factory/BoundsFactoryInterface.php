<?php

namespace Maris\Interfaces\Geo\Factory;

use Maris\Interfaces\Geo\Aggregate\LocationAggregateInterface;
use Maris\Interfaces\Geo\Model\BoundsInterface;
use Maris\Interfaces\Geo\Model\GeometryInterface;
use Maris\Interfaces\Geo\Model\LocationInterface;

/***
 * Фабрика для создания объекта границ.
 */
interface BoundsFactoryInterface
{
    /**
     * Создает новый объект по значениям.
     * @param float $north
     * @param float $west
     * @param float $south
     * @param float $east
     * @return BoundsInterface
     */
    public function new( float $north, float $west, float $south, float $east):BoundsInterface;

    /***
     * Создает объект границ из другого объекта границ.
     * @param BoundsInterface $bounds
     * @return BoundsInterface
     */
    public function fromBounds( BoundsInterface $bounds):BoundsInterface;

    /***
     * Создает объект границ в который входят все переданные точки.
     * @param LocationAggregateInterface|LocationInterface ...$locations
     * @return BoundsInterface
     */
    public function fromLocations( LocationAggregateInterface|LocationInterface ...$locations ):BoundsInterface;

    /***
     * Создает объект границ из любой географической фигуры.
     * @param GeometryInterface $geometry
     * @return BoundsInterface
     */
    public function fromGeometry( GeometryInterface $geometry ):BoundsInterface;

    /***
     * Создает объект границ из GeoJson::$bbox.
     * @param array $bbox
     * @return BoundsInterface
     */
    public function fromJson( array $bbox ):BoundsInterface;
}