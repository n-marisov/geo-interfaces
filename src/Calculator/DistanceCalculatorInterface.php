<?php

namespace Maris\Interfaces\Geo\Calculator;

use Maris\Interfaces\Geo\Model\LocationAggregateInterface;
use Maris\Interfaces\Geo\Model\LocationInterface;

interface DistanceCalculatorInterface
{
    /**
     * Вычисляет расстояние между двумя точками.
     * @param LocationAggregateInterface|LocationInterface $start
     * @param LocationAggregateInterface|LocationInterface $end
     * @return float
     */
    public function calculateDistance( LocationAggregateInterface|LocationInterface $start, LocationAggregateInterface|LocationInterface $end ):float;
}