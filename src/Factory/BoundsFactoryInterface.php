<?php

namespace Maris\Interfaces\Geo\Factory;

use Maris\Interfaces\Geo\Aggregate\LocationAggregateInterface;
use Maris\Interfaces\Geo\Model\BoundsInterface;
use Maris\Interfaces\Geo\Model\LocationInterface;

interface BoundsFactoryInterface
{
    /**
     * Создает новый объект по значениям.
     * @param float $north
     * @param float $west
     * @param float $south
     * @param float $east
     * @return BoundsInterface
     */
    public function new( float $north, float $west, float $south, float $east):BoundsInterface;

    /***
     * @param LocationAggregateInterface|LocationInterface ...$locations
     * @return BoundsInterface
     */
    public function fromLocations( LocationAggregateInterface|LocationInterface ...$locations ):BoundsInterface;
}