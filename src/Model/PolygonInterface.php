<?php

namespace Maris\Interfaces\Geo\Model;
use Countable;
use IteratorAggregate;
use Maris\Interfaces\Geo\Calculator\AreaCalculatorInterface;
use Maris\Interfaces\Geo\Calculator\DistanceCalculatorInterface;
use Maris\Interfaces\Geo\Determinant\IntersectionDeterminantInterface;

/***
 * Интерфейс полигона.
 */
interface PolygonInterface extends GeometryInterface, IteratorAggregate, Countable
{
    /***
     * Вычисляет наружней периметр полигона.
     * @param DistanceCalculatorInterface $calculator
     * @return float
     */
    public function getPerimeter( DistanceCalculatorInterface $calculator ):float;

    /**
     * Вычисляет площадь полигона.
     * @param AreaCalculatorInterface $calculator
     * @return float
     */
    public function getArea( AreaCalculatorInterface $calculator ):float;

    /**
     * Определяет, находится ли фигура внутри многоугольника.
     * @param GeometryInterface $geometry
     * @return bool
     */
    public function contains( GeometryInterface $geometry ):bool;

    /**
    * Определяет, пересекаются ли фигуры.
    * @param IntersectionDeterminantInterface $determinant
    * @param GeometryInterface $geometry
    * @return bool
    */
    public function intersects( IntersectionDeterminantInterface $determinant, GeometryInterface $geometry  ):bool;

    /**
     * Приводит объект к массиву.
     * @return array< array<LocationInterface|LocationAggregateInterface> >
     */
    public function toArray():array;
}