<?php

namespace Maris\Interfaces\Geo\Encoder;

use Maris\Interfaces\Geo\Model\PolylineInterface;

/**
 * Интерфейс декодера полилиний.
 */
interface PolylineEncoderInterface
{
    /**
     * @param non-empty-string $encoded
     * @return PolylineInterface
     */
    public function polylineDecode( string $encoded ):PolylineInterface;

    /**
     * @param PolylineInterface $polyline
     * @return string
     */
    public function polylineEncode( PolylineInterface $polyline ):string;
}