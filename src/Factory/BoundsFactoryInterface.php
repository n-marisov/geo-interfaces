<?php

namespace Maris\Interfaces\Geo\Factory;

use Maris\Interfaces\Geo\Model\LocationAggregateInterface;

interface BoundsFactoryInterface
{
    public function fromLocations( LocationAggregateInterface $locations ):BoundsFactoryInterface;
}