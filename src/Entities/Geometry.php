<?php

namespace Redzjovi\GoogleMapsPlace\Entities;

class Geometry
{
    /**
     * @var LatLngLiteral
     */
    public $location;

    /**
     * @var Bounds
     */
    public $viewport;

    /**
     * @param array $data
     */
    public function __construct($data)
    {
        $this->location = new LatLngLiteral($data['location']);
        $this->viewport = new Bounds($data['viewport']);
    }
}
