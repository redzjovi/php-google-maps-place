<?php

namespace Redzjovi\GoogleMapsPlace\Entities;

class PlusCode
{
    /**
     * @var string
     */
    public $global_code;

    /**
     * @var null|string
     */
    public $compound_code;

    /**
     * @param array $data
     */
    public function __construct($data)
    {
        $this->global_code = strval($data['global_code']);
        if (isset($data['compound_code'])) {
            $this->compound_code = strval($data['compound_code']);
        }
    }
}
