<?php

namespace Maris\Interfaces\Geo\Factory;

use Maris\Interfaces\Geo\Aggregate\LocationAggregateInterface;
use Maris\Interfaces\Geo\Aggregate\PolylineAggregateInterface;
use Maris\Interfaces\Geo\Model\LocationInterface;
use Maris\Interfaces\Geo\Model\PolygonInterface;
use Maris\Interfaces\Geo\Model\PolylineInterface;
use stdClass;

/****
 * Фабрика для создания полилиний.
 */
interface PolylineFactoryInterface
{
    /**
     * Создает новую полилинию.
     * @param iterable $coordinates
     * @return PolylineInterface
     */
    public function new( iterable $coordinates ) : PolylineInterface;

    /**
     * Создает полилинию из массива точек.
     * @param LocationInterface|LocationAggregateInterface ...$locations
     * @return PolylineInterface
     */
    public function fromLocations( LocationInterface|LocationAggregateInterface ...$locations):PolylineInterface;

    /**
     * Создает полилинию из полигона.
     * @param PolygonInterface|PolylineAggregateInterface $polygon
     * @param bool $addStartFinal Нужно ли добавить первую точку полигона в конец полилинии образовав замкнутый контур.
     * @return PolylineInterface
     */
    public function fromPolygon( PolygonInterface|PolylineAggregateInterface $polygon , bool $addStartFinal ):PolylineInterface;

    /***
     * Создает полилинию из полилинии.
     * @param PolylineInterface|PolylineAggregateInterface $polyline
     * @return PolylineInterface
     */
    public function fromPolyline( PolylineInterface|PolylineAggregateInterface $polyline ):PolylineInterface;

    /***
     * Получает полилинию из GeoJson.
     * @param string|array|stdClass $coordinatesOrGeometry
     * @return PolylineInterface|null
     */
    public function fromJson( string|array|stdClass $coordinatesOrGeometry ) : ?PolylineInterface;
}