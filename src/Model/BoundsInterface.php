<?php

namespace Maris\Interfaces\Geo\Model;

use JsonSerializable;

/***
 * Интерфейс объекта границ фигуры.
 */
interface BoundsInterface extends JsonSerializable
{
    /**
     * Возвращает северную границу.
     * @return float
     */
    public function getNorth():float;

    /**
     * Возвращает западную границу.
     * @return float
     */
    public function getWest():float;

    /**
     * Возвращает южную границу.
     * @return float
     */
    public function getSouth():float;

    /**
     * Возвращает восточную границу.
     * @return float
     */
    public function getEast():float;

    /**
     * Приводится к объекту bbox GeoJson.
     * @return float[]
     */
    public function jsonSerialize(): array;
}