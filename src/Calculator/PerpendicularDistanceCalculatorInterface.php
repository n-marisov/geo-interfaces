<?php

namespace Maris\Interfaces\Geo\Calculator;

use Maris\Interfaces\Geo\Model\LocationAggregateInterface;

/***
 * Интерфейс для вычисления перпендикулярного расстояния.
 */
interface PerpendicularDistanceCalculatorInterface
{
    /***
     * Вычисляет расстояния перпендикуляру
     * между линией большого круга образованной
     * первыми двумя точками и третей точкой.
     * @param LocationAggregateInterface $start
     * @param LocationAggregateInterface $end
     * @param LocationAggregateInterface $point
     * @return float
     */
    public function calculatePerpendicularDistance( LocationAggregateInterface $start, LocationAggregateInterface $end,LocationAggregateInterface $point ):float;
}