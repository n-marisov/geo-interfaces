<?php

namespace Maris\Interfaces\Geo\Model;

use JsonSerializable;
use Maris\Interfaces\Geo\Aggregate\BoundsAggregateInterface;

/***
 * Интерфейс для Feature GeoJson
 */
interface FeatureInterface extends BoundsAggregateInterface, JsonSerializable
{
    /***
     * @return GeometryInterface
     */
    public function getGeometry():GeometryInterface;

    public function getProperties():?array;

    public function toArray():array;

    public function jsonSerialize(): array;
}