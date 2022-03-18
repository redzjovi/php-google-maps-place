<?php

namespace Redzjovi\GoogleMapsPlace\Entities;

class PlacePhoto
{
    /**
     * @var int
     */
    public $height;

    /**
     * @var string[]
     */
    public $html_attributions = [];

    /**
     * @var string
     */
    public $photo_reference;

    /**
     * @var int
     */
    public $width;

    /**
     * @param array $data
     */
    public function __construct($data)
    {
        $this->height = intval($data['height']);
        if (is_array($data['html_attributions'])) {
            foreach ($data['html_attributions'] as $html_attribution) {
                $this->html_attributions[] = strval($html_attribution);
            }
        }
        $this->photo_reference = strval($data['photo_reference']);
        $this->width = intval($data['width']);
    }
}
