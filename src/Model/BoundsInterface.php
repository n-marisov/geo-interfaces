<?php

namespace Maris\Interfaces\Geo\Model;

use JsonSerializable;
use Maris\Interfaces\Geo\Aggregate\LocationAggregateInterface;

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

    /***
     * Определяет, входит ли точка в текущий объект границ.
     * @param LocationInterface|LocationAggregateInterface $location
     * @return bool
     */
    public function someLocation( LocationInterface|LocationAggregateInterface $location ):bool;

    /**
     * Определяет, пересекаются ли границы
     * @param BoundsInterface $bounds
     * @return bool
     */
    public function intersection( BoundsInterface $bounds ):bool;

    /***
     * Определяет, входит ли фигура в объект границ
     * без остатка (т.е. полностью).
     * @param GeometryInterface $geometry
     * @return bool
     */
    public function contains( GeometryInterface $geometry ):bool;
}