<?php

namespace Maris\Interfaces\Geo\Finder;

use Maris\Interfaces\Geo\Aggregate\LocationAggregateInterface;
use Maris\Interfaces\Geo\Model\LocationInterface;

/***
 * Вычисляет промежуточные точки.
 */
interface IntermediateLocationFinderInterface
{
    /***
     * @param LocationAggregateInterface|LocationInterface $start
     * @param LocationAggregateInterface|LocationInterface $end
     * @param float $percent
     * @return LocationInterface
     */
    public function findIntermediateLocation( LocationAggregateInterface|LocationInterface $start, LocationAggregateInterface|LocationInterface $end , float $percent ):LocationInterface;
}