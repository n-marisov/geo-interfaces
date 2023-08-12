<?php

namespace Maris\Interfaces\Geo\Simplifier;

use Maris\Interfaces\Geo\Model\LocationAggregateInterface;

interface SimplifierInterface
{
    /***
     * Упрощает массив точек.
     * @param LocationAggregateInterface ...$locations
     * @return LocationAggregateInterface[]
     */
    public function simplify( LocationAggregateInterface ...$locations ):array;
}