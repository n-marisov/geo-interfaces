<?php

namespace Maris\Symfony\Interfaces\Geo\Calculator;

use Maris\Symfony\Interfaces\Geo\Model\LocationAggregateInterface;

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