<?php

namespace Maris\Interfaces\Geo\Calculator;

use Maris\Interfaces\Geo\Aggregate\LocationAggregateInterface;
use Maris\Interfaces\Geo\Model\LocationInterface;

interface AreaCalculatorInterface
{
    /**
     * Вычисляет площадь фигуры построенной из точек.
     * @param LocationAggregateInterface|LocationInterface ...$locations
     * @return float
     */
    public function calculateArea( LocationAggregateInterface|LocationInterface ...$locations):float;
}