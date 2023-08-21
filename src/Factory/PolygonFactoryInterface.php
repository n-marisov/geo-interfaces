<?php

namespace Maris\Interfaces\Geo\Factory;

use Maris\Interfaces\Geo\Aggregate\LocationAggregateInterface;
use Maris\Interfaces\Geo\Aggregate\PolygonAggregateInterface;
use Maris\Interfaces\Geo\Aggregate\PolylineAggregateInterface;
use Maris\Interfaces\Geo\Model\LocationInterface;
use Maris\Interfaces\Geo\Model\PolygonInterface;
use Maris\Interfaces\Geo\Model\PolylineInterface;
use stdClass;

interface PolygonFactoryInterface
{
    /**
     * Создает новую полилинию.
     * @param iterable $coordinates
     * @return PolygonInterface
     */
    public function new( iterable $coordinates ) : PolygonInterface;

    /***
     * Создает полигон из массива точек.
     * @param LocationAggregateInterface|LocationInterface ...$locations
     * @return PolygonInterface
     */
    public function fromLocations( LocationAggregateInterface|LocationInterface ...$locations):PolygonInterface;

    /***
     * Создает полигон из полилинии.
     * @param PolylineInterface|PolylineAggregateInterface $polyline
     * @return PolygonInterface
     */
    public function fromPolyline( PolylineInterface|PolylineAggregateInterface $polyline ):PolygonInterface;

    /**
     * Создает полигон из полигона.
     * @param PolygonInterface|PolygonAggregateInterface $polygon
     * @return PolygonInterface
     */
    public function fromPolygon( PolygonInterface|PolygonAggregateInterface $polygon ):PolygonInterface;

    /***
     * Получает полилинию из GeoJson.
     * @param string|array|stdClass $coordinatesOrGeometry
     * @return PolygonInterface|null
     */
    public function fromJson( string|array|stdClass $coordinatesOrGeometry ) : ?PolygonInterface;
}