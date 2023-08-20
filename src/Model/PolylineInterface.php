<?php

namespace Maris\Interfaces\Geo\Model;

use Countable;
use IteratorAggregate;
use Maris\Interfaces\Geo\Aggregate\LocationAggregateInterface;
use Maris\Interfaces\Geo\Calculator\BearingCalculatorInterface;
use Maris\Interfaces\Geo\Calculator\DistanceCalculatorInterface;
use Maris\Interfaces\Geo\Determinant\IntersectionDeterminantInterface;
use Maris\Interfaces\Geo\Determinant\OrientationDeterminantInterface;
use Maris\Interfaces\Geo\Finder\IntermediateLocationFinderInterface;
use Maris\Interfaces\Geo\Finder\MidLocationFinderInterface;
use Maris\Interfaces\Geo\Iterator\LocationsIteratorInterface;
use Maris\Interfaces\Geo\Simplifier\SimplifierInterface;
use Traversable;

/**
 * Интерфейс полилинии.
 * @template TKey as positive-int
 * @template TValue as LocationInterface
 * @template-implements Traversable<TKey, TValue>
 */
interface PolylineInterface extends GeometryInterface, IteratorAggregate, Countable
{
    /**
     * Возвращает первую точку полилинии
     * @return LocationInterface|LocationAggregateInterface|null
     */
    public function getStart():LocationInterface|LocationAggregateInterface|null;

    /**
     * Возвращает последнюю точку полилинии
     * @return LocationInterface|LocationAggregateInterface|null
     */
    public function getEnd():LocationInterface|LocationAggregateInterface|null;

    /**
     * Добавляет точку в конец полилинии.
     * @param LocationInterface|LocationAggregateInterface $location
     * @return $this
     */
    public function add( LocationInterface|LocationAggregateInterface $location ):self;

    /***
     * Определяет наличие точки в полилинии.
     * @param LocationInterface|LocationAggregateInterface $location
     * @return bool
     */
    public function contains( LocationInterface|LocationAggregateInterface $location ):bool;
    //public function has( LocationInterface|LocationAggregateInterface $location ):bool;
    /**
     * Получает точку по позиции в списке.
     * @param positive-int $position
     * @return LocationInterface|LocationAggregateInterface|null
     */
    public function get( int $position ):LocationInterface|LocationAggregateInterface|null;

    /**
     * Удаляет точку по позиции или объекту.
     * @param int|LocationInterface|LocationAggregateInterface $locationOrPosition
     * @return LocationInterface|LocationAggregateInterface|null
     */
    public function remove( int|LocationInterface|LocationAggregateInterface $locationOrPosition ):LocationInterface|LocationAggregateInterface|null;

    /**
     * Добавляет точку только если она отсутствует в полилинии.
     * Возвращает bool была ли добавлена точка.
     * @param LocationInterface|LocationAggregateInterface $location
     * @return bool
     */
    public function addUnique( LocationInterface|LocationAggregateInterface $location ):bool;

    /***
     * Определяет, является ли полилиния
     * отрезком из двух точек.
     * @return bool
     */
    public function isSection():bool;

    /**
     * Возвращает лист из содержащий в себе только
     * полилинии которые являются отрезками ( isSection() === true )
     * созданные из текущей полилинии.
     * @return array<PolylineInterface>
     */
    public function getSections():array;

    /**
     * Получает протяженность линии.
     * @param DistanceCalculatorInterface $calculator
     * @return float
     */
    public function getLength( DistanceCalculatorInterface $calculator ):float;

    /***
     * Возвращает прямой азимут между первой и последней точкой.
     * @param BearingCalculatorInterface $calculator
     * @return float
     */
    public function getInitialBearing( BearingCalculatorInterface $calculator ):float;

    /***
     * Возвращает конечный азимут между первой и последней точкой.
     * @param BearingCalculatorInterface $calculator
     * @return float
     */
    public function getFinalBearing( BearingCalculatorInterface $calculator ):float;

    /**
     * Возвращает среднюю точку между первой и последней точкой.
     * @param MidLocationFinderInterface $finder
     * @return LocationInterface|LocationAggregateInterface|null
     */
    public function getMidLocation( MidLocationFinderInterface $finder ):LocationInterface|LocationAggregateInterface|null;

    /**
     * Возвращает промежуточную точку между первой и последней точкой.
     * @param IntermediateLocationFinderInterface $finder
     * @param float $percent
     * @return LocationInterface|LocationAggregateInterface|null
     */
    public function getIntermediateLocation( IntermediateLocationFinderInterface $finder , float $percent ):LocationInterface|LocationAggregateInterface|null;

    /***
     * Возвращает полилинию развернутую в обратную сторону.
     * @return PolylineInterface
     */
    public function getReverse():PolylineInterface;

    /**
     * Возвращает итератор для переборки всех точек полилинии.
     * @return LocationsIteratorInterface
     */
    public function getIterator(): LocationsIteratorInterface;

    /**
     * Определяет, пересекаются ли фигуры.
     * @param IntersectionDeterminantInterface $determinant
     * @param GeometryInterface $geometry
     * @return bool
     */
    public function intersects( IntersectionDeterminantInterface $determinant, GeometryInterface $geometry  ):bool;

    /**
     * Определяет ориентацию точки относительно
     * первой и последней точки полилинии.
     * @param OrientationDeterminantInterface $determinant
     * @param LocationInterface|LocationAggregateInterface $location
     * @return int<-1,1>
     */
    public function getOrientation( OrientationDeterminantInterface $determinant, LocationInterface|LocationAggregateInterface $location ):int;

    /**
     * Упрощает полилинию.
     * @param SimplifierInterface $simplifier
     * @return $this
     */
    public function simplify( SimplifierInterface $simplifier ):static;
}