<?php

namespace Redzjovi\GoogleMapsPlace\Responses;

use Redzjovi\GoogleMapsPlace\Entities\Place;
use Redzjovi\GoogleMapsPlace\Enums\PlacesSearchStatus;

class NearbySearchResponse
{
    /**
     * @var string[]
     */
    public $html_attributions = [];

    /**
     * @var Place[]
     */
    public $results = [];

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
     * @var null|string
     */
    public $next_page_token;

    /**
     * @param array $data
     */
    public function __construct($data)
    {
        foreach ($data['html_attributions'] as $html_attribution) {
            $this->html_attributions[] = strval($html_attribution);
        }
        if (isset($data['results']) && is_array($data['results'])) {
            foreach ($data['results'] as $result) {
                $this->results[] = new Place($result);
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
        if (isset($data['next_page_token'])) {
            $this->next_page_token = strval($data['next_page_token']);
        }
    }
}
