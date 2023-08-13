<?php

namespace Maris\Interfaces\Geo\AbstractModel;

use Maris\Interfaces\Geo\Model\CartesianInterface;

/**
 * Абстрактная реализация Декартовой координаты.
 */
abstract class AbstractCartesian implements CartesianInterface
{
    protected float $x;

    protected float $y;

    protected float $z;

    /**
     * @param float $x
     * @param float $y
     * @param float $z
     */
    public function __construct(float $x, float $y, float $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    /**
     * @return float
     */
    public function getX(): float
    {
        return $this->x;
    }

    /**
     * @return float
     */
    public function getY(): float
    {
        return $this->y;
    }

    /**
     * @return float
     */
    public function getZ(): float
    {
        return $this->z;
    }




}