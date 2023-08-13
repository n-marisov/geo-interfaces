<?php

namespace Maris\Interfaces\Geo\Factory;

use Maris\Interfaces\Geo\Model\LocationAggregateInterface;
use Maris\Interfaces\Geo\Model\CartesianInterface;
use Maris\Interfaces\Geo\Model\LocationInterface;

/**
 * Фабрика для создания Декартовых координат.
 */
interface CartesianFactoryInterface
{
    /***
     * Создает новый объект CartesianInterface по значениям.
     * @param float $x
     * @param float $y
     * @param float $z
     * @return CartesianInterface
     */
    public function new( float $x, float $y, float $z ):CartesianInterface;

    /**
     * Преобразует обычные координаты к Декартовым.
     * @param LocationAggregateInterface|LocationInterface $location
     * @return CartesianInterface
     */
    public function fromLocation( LocationAggregateInterface|LocationInterface $location ):CartesianInterface;
}