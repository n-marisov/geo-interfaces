<?php

namespace Maris\Interfaces\Geo\Model;

use Countable;
use IteratorAggregate;
use Maris\Interfaces\Geo\Calculator\DistanceCalculatorInterface;
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
     * Возвращает полилинию развернутую в обратную сторону.
     * @return PolylineInterface
     */
    public function getReverse():PolylineInterface;

    /**
     * Возвращает итератор для переборки всех точек полилинии.
     * @return Traversable<LocationInterface>
     */
    public function getIterator(): Traversable;
}