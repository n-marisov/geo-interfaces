<?php

namespace Maris\Interfaces\Geo\AbstractModel;

use Maris\Interfaces\Geo\Model\LocationInterface;

/**
 * Абстрактная реализация координаты
 */
abstract class AbstractLocation implements LocationInterface
{
    protected float $latitude;

    protected float $longitude;

    /**
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct(float $latitude, float $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }


    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }
}