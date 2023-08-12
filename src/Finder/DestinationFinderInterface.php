<?php

namespace Maris\Symfony\Interfaces\Geo\Finder;

use Maris\Symfony\Interfaces\Geo\Model\LocationAggregateInterface;
use Maris\Symfony\Interfaces\Geo\Model\LocationInterface;

/***
 * Ищет точку по начальной точке, азимуту и расстоянию.
 */
interface DestinationFinderInterface
{
    public function findDestination( LocationAggregateInterface $location, float $initialBearing, float $distance ):LocationInterface;
}