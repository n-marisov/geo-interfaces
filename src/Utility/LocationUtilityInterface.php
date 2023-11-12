<?php

namespace Maris\Interfaces\Geo\Utility;

use Maris\Interfaces\Geo\Model\LocationInterface;

/***
 * Утилита для работы с объектом LocationInterface
 */
interface LocationUtilityInterface
{
    /***
     * Проверяет можно ли создать точку из строки.
     * Если возвращает true метод from обязан создать объект.
     * @param string|array $location
     * @return bool
     */
    public function valid( mixed $location ):bool;

    /***
     * Создает объект из всего чего можно создать.
     * @param mixed $location
     * @return LocationInterface|null
     */
    public function from( mixed $location ):?LocationInterface;

    /**
     * Создает объект из широты и долготы.
     * @param float $latitude
     * @param float $longitude
     * @return LocationInterface|null
     */
    public function create( float $latitude, float $longitude ):?LocationInterface;

}