<?php

namespace Maris\Symfony\Geo\Interfaces\Finder;

use Maris\Symfony\Geo\Interfaces\Model\LocationAggregateInterface;
use Maris\Symfony\Geo\Interfaces\Model\LocationInterface;

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