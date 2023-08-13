<?php

namespace Maris\Interfaces\Geo\Model;

use IteratorAggregate;
use Traversable;

/**
 * Интерфейс полилинии.
 * @template TKey as positive-int
 * @template TValue as LocationInterface
 * @template-implements Traversable<TKey, TValue>
 */
interface PolylineInterface extends GeometryInterface, IteratorAggregate
{
    /**
     * @return Traversable<LocationInterface>
     */
    public function getIterator(): Traversable;
}