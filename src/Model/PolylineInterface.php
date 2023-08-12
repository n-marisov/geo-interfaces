<?php

namespace Maris\Interfaces\Geo\Model;

use IteratorAggregate;
use Traversable;

/**
 * Интерфейс полилинии.
 */
interface PolylineInterface extends GeometryInterface, IteratorAggregate
{
    /**
     * @return Traversable<LocationAggregateInterface>
     */
    public function getIterator(): Traversable;
}