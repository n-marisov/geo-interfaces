<?php

namespace Maris\Symfony\Geo\Interfaces\Simplifier;

use Maris\Symfony\Geo\Interfaces\LocationAggregateInterface;

interface SimplifierInterface
{
    /***
     * Упрощает массив точек.
     * @param LocationAggregateInterface ...$locations
     * @return LocationAggregateInterface[]
     */
    public function simplify( LocationAggregateInterface ...$locations ):array;
}