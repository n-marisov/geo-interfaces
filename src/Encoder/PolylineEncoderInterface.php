<?php

namespace Maris\Interfaces\Geo\Encoder;

use Maris\Interfaces\Geo\Model\PolylineInterface;

interface PolylineEncoderInterface
{
    public function decode( string $encoded ):PolylineInterface;

    public function encode( PolylineInterface $polyline ):string;
}