<?php

namespace Maris\Interfaces\Geo\Finder;

use Maris\Interfaces\Geo\Model\LocationAggregateInterface;
use Maris\Interfaces\Geo\Model\LocationInterface;

/***
 * Ищет точку по начальной точке, азимуту и расстоянию.
 */
interface DestinationFinderInterface
{
    /***
     * @param LocationAggregateInterface|LocationInterface $location
     * @param float $initialBearing
     * @param float $distance
     * @return LocationInterface
     */
    public function findDestination( LocationAggregateInterface|LocationInterface $location, float $initialBearing, float $distance ):LocationInterface;
}