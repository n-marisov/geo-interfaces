<?php

namespace Maris\Interfaces\Geo\Model;

use JsonSerializable;

/**
 * Любой объект который приводится к geo json.
 */
interface GeoJsonSerializable extends JsonSerializable
{
    /**
     * Приводит к GeoJson.
     * @return array{ type:string, bbox:float[], coordinates:array[]|float[] }
     */
    public function jsonSerialize(): array;
}