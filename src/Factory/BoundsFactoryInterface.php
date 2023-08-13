<?php

namespace Maris\Interfaces\Geo\Factory;

use Maris\Interfaces\Geo\Model\BoundsInterface;
use Maris\Interfaces\Geo\Model\LocationAggregateInterface;
use Maris\Interfaces\Geo\Model\LocationInterface;

interface BoundsFactoryInterface
{

    /***
     * @param LocationAggregateInterface|LocationInterface ...$locations
     * @return BoundsInterface
     */
    public function fromLocations( LocationAggregateInterface|LocationInterface ...$locations ):BoundsInterface;
}