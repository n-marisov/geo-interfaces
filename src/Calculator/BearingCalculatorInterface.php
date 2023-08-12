<?php

namespace Maris\Symfony\Geo\Interfaces\Calculator;

use Maris\Symfony\Geo\Interfaces\Model\LocationAggregateInterface;

/***
 * Калькулятор для вычисления азимутов.
 */
interface BearingCalculatorInterface
{
    /**
     * Вычисляет начальный азимут.
     * @param LocationAggregateInterface $start
     * @param LocationAggregateInterface $end
     * @return float
     */
    public function calculateInitialBearing( LocationAggregateInterface $start, LocationAggregateInterface $end ):float;

    /**
     * Вычисляет конечный азимут.
     * @param LocationAggregateInterface $start
     * @param LocationAggregateInterface $end
     * @return float
     */
    public function calculateFinalBearing( LocationAggregateInterface $start, LocationAggregateInterface $end ):float;
}