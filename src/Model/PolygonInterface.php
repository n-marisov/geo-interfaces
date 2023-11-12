<?php

namespace Maris\Interfaces\Geo\Model;
use Countable;
use IteratorAggregate;
use Maris\Interfaces\Geo\Calculator\AreaCalculatorInterface;
use Maris\Interfaces\Geo\Calculator\DistanceCalculatorInterface;
use Maris\Interfaces\Geo\Iterator\LocationsIteratorInterface;

/***
 * Интерфейс полигона.
 * Полигон представляет собой коллекцию
 * полилиний где первая полилиния является наружном периметром полигона,
 * а все последующие являются вырезами полигона (дырка от бублика).
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
     * @param bool $isFull Если false, то внутренние полигоны игнорируются.
     * @return float
     */
    public function getArea( AreaCalculatorInterface $calculator , bool $isFull ):float;

    /**
     * Определяет, находится ли фигура внутри многоугольника.
     * @param GeometryInterface $geometry
     * @return bool
     */
    public function contains( GeometryInterface $geometry ):bool;

    /***
     * Перебирает точки наружного кольца полигона.
     * @return LocationsIteratorInterface
     */
    public function getIterator(): LocationsIteratorInterface;
}