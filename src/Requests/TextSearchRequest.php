<?php

namespace Redzjovi\GoogleMapsPlace\Requests;

/**
 * https://developers.google.com/maps/documentation/places/web-service/search-text#TextSearchRequests
 */
class TextSearchRequest
{
    const LANGUAGE_ENGLISH = 'en';
    const LANGUAGE_INDONESIAN = 'id';

    /**
     * @var string
     */
    public $query;

    /**
     * @var null|string|self::LANGUAGE_*
     */
    public $language;

    /**
     * @var null|string
     */
    public $location;

    /**
     * @var null|string
     */
    public $maxprice;

    /**
     * @var null|string
     */
    public $minprice;

    /**
     * @var null|string
     */
    public $opennow;

    /**
     * @var null|string
     */
    public $pagetoken;

    /**
     * @var null|string
     */
    public $radius;

    /**
     * @var null|string
     */
    public $region;

    /**
     * @var null|string
     */
    public $type;

    /**
     * @param string $query
     * @param null|string|self::LANGUAGE_* $language
     * @param null|string $location
     * @param null|string $maxprice
     * @param null|string $minprice
     * @param null|string $opennow
     * @param null|string $pagetoken
     * @param null|string $radius
     * @param null|string $region
     * @param null|string $type
     */
    public function __construct(
        $query,
        $language = null,
        $location = null,
        $maxprice = null,
        $minprice = null,
        $opennow = null,
        $pagetoken = null,
        $radius = null,
        $region = null,
        $type = null
    )
    {
        $this->query = $query;
        $this->language = $language;
        $this->location = $location;
        $this->maxprice = $maxprice;
        $this->minprice = $minprice;
        $this->opennow = $opennow;
        $this->pagetoken = $pagetoken;
        $this->radius = $radius;
        $this->region = $region;
        $this->type = $type;
    }

    public function toQueries($data = [])
    {
        return array_filter(array_merge(
            [
                'query' => $this->query,
                'language' => $this->language,
                'location' => $this->location,
                'maxprice' => $this->maxprice,
                'minprice' => $this->minprice,
                'opennow' => $this->opennow,
                'pagetoken' => $this->pagetoken,
                'radius' => $this->radius,
                'region' => $this->region,
                'type' => $this->type
            ],
            $data
        ));
    }
}
