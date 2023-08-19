<?php

namespace Maris\Interfaces\Geo\Calculator;

use Maris\Interfaces\Geo\Aggregate\LocationAggregateInterface;
use Maris\Interfaces\Geo\Model\LocationInterface;

/***
 * Интерфейс для вычисления перпендикулярного расстояния.
 */
interface PerpendicularDistanceCalculatorInterface
{
    /***
     * Вычисляет расстояния перпендикуляру
     * между линией большого круга образованной
     * первыми двумя точками и третей точкой.
     * @param LocationAggregateInterface|LocationInterface $start
     * @param LocationAggregateInterface|LocationInterface $end
     * @param LocationAggregateInterface|LocationInterface $point
     * @return float
     */
    public function calculatePerpendicularDistance( LocationAggregateInterface|LocationInterface $start, LocationAggregateInterface|LocationInterface $end,LocationAggregateInterface|LocationInterface $point ):float;
}