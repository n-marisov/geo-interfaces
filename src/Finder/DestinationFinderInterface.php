<?php

namespace Maris\Interfaces\Geo\Finder;

use Maris\Interfaces\Geo\Model\LocationAggregateInterface;
use Maris\Interfaces\Geo\Model\LocationInterface;

/***
 * Ищет точку по начальной точке, азимуту и расстоянию.
 */
interface DestinationFinderInterface
{
    public function findDestination( LocationAggregateInterface $location, float $initialBearing, float $distance ):LocationInterface;
}