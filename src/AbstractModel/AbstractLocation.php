<?php

namespace Maris\Interfaces\Geo\AbstractModel;

use Maris\Interfaces\Geo\Factory\FeatureFactoryInterface;
use Maris\Interfaces\Geo\Model\BoundsInterface;
use Maris\Interfaces\Geo\Model\FeatureInterface;
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

    public function toArray(): array
    {
        return [
            "type"=>"Point",
            "coordinates" => [$this->longitude,$this->latitude]
        ];
    }

    public function toFeature( FeatureFactoryInterface $factory ): FeatureInterface
    {
        return $factory->fromGeometry( $this );
    }

    public function getBounds(): BoundsInterface
    {
        return new class(
            $this->getLatitude(),
            $this->getLongitude(),
            $this->getLatitude(),
            $this->getLongitude()
        ) extends AbstractBounds{};
    }

    public function jsonSerialize(): array
    {
       return [
           "type" => "Point",
           "coordinates" => [$this->getLongitude(),$this->getLatitude()]
       ];
    }

}