<?php

namespace Maris\Symfony\Geo\Extra\Interfaces\Finder;

use Maris\Symfony\Geo\Entity\Location;
use Maris\Symfony\Geo\Interfaces\LocationAggregateInterface;

/***
 * Вычисляет промежуточные точки.
 */
interface IntermediateLocationFinderInterface
{
    /***
     * @param LocationAggregateInterface $start
     * @param LocationAggregateInterface $end
     * @param float $f
     * @return Location
     */
    public function findIntermediateLocation( LocationAggregateInterface $start, LocationAggregateInterface $end , float $percent ):Location;
}