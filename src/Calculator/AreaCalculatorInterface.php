<?php

namespace Maris\Interfaces\Geo\Calculator;

use Maris\Interfaces\Geo\Aggregate\LocationAggregateInterface;
use Maris\Interfaces\Geo\Aggregate\PolygonAggregateInterface;
use Maris\Interfaces\Geo\Model\LocationInterface;
use Maris\Interfaces\Geo\Model\PolygonInterface;

/***
 * Калькулятор расчета площади полигона.
 */
interface AreaCalculatorInterface
{
    /**
     * Вычисляет площадь полигона построенной из точек.
     * @param PolygonInterface|PolygonAggregateInterface $polygon
     * @return float
     */
    public function calculateArea( PolygonInterface|PolygonAggregateInterface $polygon ):float;
}