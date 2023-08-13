<?php

namespace Maris\Interfaces\Geo\Simplifier;

use Maris\Interfaces\Geo\Model\LocationAggregateInterface;
use Maris\Interfaces\Geo\Model\LocationInterface;

interface SimplifierInterface
{
    /***
     * Упрощает массив точек.
     * @param LocationAggregateInterface|LocationInterface ...$locations
     * @return LocationAggregateInterface[]|LocationInterface[]
     */
    public function simplify( LocationAggregateInterface|LocationInterface ...$locations ):array;
}