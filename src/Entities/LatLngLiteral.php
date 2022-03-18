<?php

namespace Redzjovi\GoogleMapsPlace\Entities;

class LatLngLiteral
{
    /**
     * @var float
     */
    public $lat;

    /**
     * @var float
     */
    public $lng;

    /**
     * @param array $data
     */
    public function __construct($data)
    {
        $this->lat = floatval($data['lat']);
        $this->lng = floatval($data['lng']);
    }
}
