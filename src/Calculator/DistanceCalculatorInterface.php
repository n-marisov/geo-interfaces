<?php

namespace Maris\Symfony\Geo\Interfaces\Calculator;

use Maris\Symfony\Geo\Interfaces\Model\LocationAggregateInterface;

interface DistanceCalculatorInterface
{
    /**
     * Вычисляет расстояние между двумя точками.
     * @param LocationAggregateInterface $start
     * @param LocationAggregateInterface $end
     * @return float
     */
    public function calculateDistance( LocationAggregateInterface $start, LocationAggregateInterface $end ):float;
}