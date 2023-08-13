<?php

namespace Maris\Interfaces\Geo\Calculator;

use Maris\Interfaces\Geo\Model\LocationAggregateInterface;
use Maris\Interfaces\Geo\Model\LocationInterface;

/***
 * Калькулятор для вычисления азимутов.
 */
interface BearingCalculatorInterface
{
    /**
     * Вычисляет начальный азимут.
     * @param LocationAggregateInterface|LocationInterface $start
     * @param LocationAggregateInterface|LocationInterface $end
     * @return float
     */
    public function calculateInitialBearing( LocationAggregateInterface|LocationInterface $start, LocationAggregateInterface|LocationInterface $end ):float;

    /**
     * Вычисляет конечный азимут.
     * @param LocationAggregateInterface|LocationInterface $start
     * @param LocationAggregateInterface|LocationInterface $end
     * @return float
     */
    public function calculateFinalBearing( LocationAggregateInterface|LocationInterface $start, LocationAggregateInterface|LocationInterface $end ):float;
}