<?php

namespace Maris\Interfaces\Geo\Model;

use JsonSerializable;
use Maris\Interfaces\Geo\Aggregate\BoundsAggregateInterface;
use Maris\Interfaces\Geo\Factory\FeatureFactoryInterface;

/**
 * Интерфейс фигуры на карте.
 */
interface GeometryInterface extends BoundsAggregateInterface, JsonSerializable
{
    /**
     * Приводит фигуру к массиву.
     * Массив представляет собой объект geometry geoJson.
     * @return array{ type:string,coordinates:float[]|float[][]|float[][][] }
     */
    public function toArray():array;

    /**
     * Приводит объект к FeatureInterface
     * @param FeatureFactoryInterface $factory
     * @return FeatureInterface
     */
    public function toFeature( FeatureFactoryInterface $factory ):FeatureInterface;
}