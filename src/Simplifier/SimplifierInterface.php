<?php

namespace Maris\Symfony\Interfaces\Geo\Simplifier;

use Maris\Symfony\Interfaces\Geo\Model\LocationAggregateInterface;

interface SimplifierInterface
{
    /***
     * Упрощает массив точек.
     * @param LocationAggregateInterface ...$locations
     * @return LocationAggregateInterface[]
     */
    public function simplify( LocationAggregateInterface ...$locations ):array;
}