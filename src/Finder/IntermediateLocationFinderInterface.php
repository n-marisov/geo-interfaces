<?php

namespace Maris\Symfony\Interfaces\Geo\Finder;

use Maris\Symfony\Interfaces\Geo\Model\LocationAggregateInterface;
use Maris\Symfony\Interfaces\Geo\Model\LocationInterface;

/***
 * Вычисляет промежуточные точки.
 */
interface IntermediateLocationFinderInterface
{
    /***
     * @param LocationAggregateInterface $start
     * @param LocationAggregateInterface $end
     * @param float $percent
     * @return LocationInterface
     */
    public function findIntermediateLocation( LocationAggregateInterface $start, LocationAggregateInterface $end , float $percent ):LocationInterface;
}