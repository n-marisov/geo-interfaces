<?php

namespace Maris\Interfaces\Geo\Collection;

use IteratorAggregate;
use JsonSerializable;
use Maris\Interfaces\Geo\Model\GeometryInterface;

/**
 * Интерфейс коллекций геометрических фигур.
 */
interface GeometryCollectionInterface extends JsonSerializable, IteratorAggregate
{
    /**
     * @return array<GeometryInterface>
     */
    public function getGeometries():array;

    /**
     * @return array{type:string,geometries:array}
     */
    public function jsonSerialize(): array;
}