<?php

namespace Redzjovi\GoogleMapsPlace\Entities;

class Bounds
{
    /**
     * @var LatLngLiteral
     */
    public $northeast;

    /**
     * @var LatLngLiteral
     */
    public $southwest;

    /**
     * @param array $data
     */
    public function __construct($data)
    {
        $this->northeast = new LatLngLiteral($data['northeast']);
        $this->southwest = new LatLngLiteral($data['southwest']);
    }
}
