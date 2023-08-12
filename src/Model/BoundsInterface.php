<?php

namespace Maris\Symfony\Interfaces\Geo\Model;

interface BoundsInterface
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
}