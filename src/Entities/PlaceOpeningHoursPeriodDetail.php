<?php

namespace Redzjovi\GoogleMapsPlace\Entities;

class PlaceOpeningHoursPeriodDetail
{
    /**
     * @var int
     */
    public $day;

    /**
     * @var string
     */
    public $time;

    /**
     * @param array $data
     */
    public function __construct($data)
    {
        $this->day = intval($data['day']);
        $this->time = strval($data['time']);
    }
}
