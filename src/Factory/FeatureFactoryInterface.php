<?php

namespace Maris\Interfaces\Geo\Factory;

use Maris\Interfaces\Geo\Model\FeatureInterface;
use Maris\Interfaces\Geo\Model\GeometryInterface;

/***
 * Фабрика для создания FeatureInterface.
 */
interface FeatureFactoryInterface
{
    /***
     * Создает объект из всех переданных географических фигур.
     * @param GeometryInterface $geometry
     * @return FeatureInterface
     */
    public function fromGeometries( GeometryInterface $geometry ):FeatureInterface;
}