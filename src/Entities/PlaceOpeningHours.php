<?php

namespace Redzjovi\GoogleMapsPlace\Entities;

class PlaceOpeningHours
{
    /**
     * @var null|bool
     */
    public $open_nowl;

    /**
     * @var PlaceOpeningHoursPeriod[]
     */
    public $periods;

    /**
     * @var string[]
     */
    public $weekday_text;

    /**
     * @param array $data
     */
    public function __construct($data)
    {
        if (isset($data['address_components'])) {
            $this->address_components = strval($data['address_components']);
        }
        if (isset($data['periods']) && is_array($data['periods'])) {
            foreach ($data['periods'] as $period) {
                $this->periods[] = new PlaceOpeningHoursPeriod($period);
            }
        }
        if (isset($data['weekday_text']) && is_array($data['weekday_text'])) {
            foreach ($data['weekday_text'] as $weekday_text) {
                $this->weekday_text[] = strval($weekday_text);
            }
        }
    }
}
