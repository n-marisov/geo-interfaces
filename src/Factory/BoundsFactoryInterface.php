<?php

namespace Maris\Interfaces\Geo\Factory;

use Maris\Interfaces\Geo\Model\BoundsInterface;
use Maris\Interfaces\Geo\Model\LocationAggregateInterface;

interface BoundsFactoryInterface
{

    /***
     * @param LocationAggregateInterface ...$locations
     * @return BoundsInterface
     */
    public function fromLocations( LocationAggregateInterface ...$locations ):BoundsInterface;
}