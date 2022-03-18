<?php

namespace Redzjovi\GoogleMapsPlace\Responses;

use Redzjovi\GoogleMapsPlace\Entities\Place;
use Redzjovi\GoogleMapsPlace\Enums\PlacesSearchStatus;

class FindPlaceResponse
{
    /**
     * @var Place[]
     */
    public $candidates = [];

    /**
     * @var string|PlacesSearchStatus::*
     */
    public $status;

    /**
     * @var null|string
     */
    public $error_message;

    /**
     * @var string[]
     */
    public $info_messages = [];

    /**
     * @param array $data
     */
    public function __construct($data)
    {
        if (isset($data['candidates']) && is_array($data['candidates'])) {
            foreach ($data['candidates'] as $candidate) {
                $this->candidates[] = new Place($candidate);
            }
        }
        $this->status = strval($data['status']);
        if (isset($data['error_message'])) {
            $this->error_message = strval($data['error_message']);
        }
        if (isset($data['info_messages']) && is_array($data['info_messages'])) {
            foreach ($data['info_messages'] as $info_message) {
                $this->info_messages[] = strval($info_message);
            }
        }
    }
}
