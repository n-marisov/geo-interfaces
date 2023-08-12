<?php

namespace Maris\Interfaces\Geo\Factory;

use Maris\Interfaces\Geo\Model\PolylineInterface;
use stdClass;

interface PolylineFactoryInterface
{
    /**
     * Создает новую полилинию.
     * @param iterable $coordinates
     * @return PolylineInterface
     */
    public function new( iterable $coordinates ) : PolylineInterface;

    /***
     * Получает полилинию из GeoJson.
     * @param string|array|stdClass $coordinatesOrGeometry
     * @return PolylineInterface|null
     */
    public function fromJson( string|array|stdClass $coordinatesOrGeometry ) : ?PolylineInterface;
}