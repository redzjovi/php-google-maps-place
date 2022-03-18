<?php

namespace Redzjovi\GoogleMapsPlace\Entities;

class PlaceOpeningHoursPeriod
{
    /**
     * @var PlaceOpeningHoursPeriodDetail
     */
    public $close;

    /**
     * @var PlaceOpeningHoursPeriodDetail
     */
    public $open;

    /**
     * @param array $data
     */
    public function __construct($data)
    {
        $this->close = new PlaceOpeningHoursPeriodDetail($data['close']);
        $this->open = new PlaceOpeningHoursPeriodDetail($data['open']);
    }
}
