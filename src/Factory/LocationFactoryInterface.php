<?php

namespace Maris\Interfaces\Geo\Factory;

use Maris\Interfaces\Geo\Model\CartesianInterface;
use Maris\Interfaces\Geo\Model\LocationInterface;

/**
 * Фабрика для создания координат.
 */
interface LocationFactoryInterface
{
    /**
     * Создает новый объект по значениям.
     * @param float $latitude
     * @param float $longitude
     * @return LocationInterface
     */
    public function new( float $latitude, float $longitude ):LocationInterface;


    /***
     * Преобразует точку из Декартовой системы в обычную.
     * @param CartesianInterface $cartesian
     * @return LocationInterface
     */
    public function fromCartesian( CartesianInterface $cartesian ):LocationInterface;

    /**
     * Создает новый объект из строки
     * @param string $coordinate
     * @return LocationInterface|null
     */
    public function fromString( string $coordinate ):?LocationInterface;
}