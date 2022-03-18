<?php

namespace Redzjovi\GoogleMapsPlace\Requests;

/**
 * https://developers.google.com/maps/documentation/places/web-service/search-nearby#PlaceSearchRequests
 */
class NearbySearchRequest
{
    const LANGUAGE_ENGLISH = 'en';
    const LANGUAGE_INDONESIAN = 'id';

    /**
     * @var string
     * The point around which to retrieve place information. This must be specified as latitude,longitude.
     */
    public $location;

    /**
     * @var null|string
     */
    public $keyword;

    /**
     * @var null|string|self::LANGUAGE_*
     */
    public $language;

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
    public $name;

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
    public $rankby;

    /**
     * @var null|string
     */
    public $type;

    /**
     * @param string $location
     * @param null|string $keyword
     * @param null|string|self::LANGUAGE_* $language
     * @param null|string $maxprice
     * @param null|string $minprice
     * @param null|string $name
     * @param null|string $opennow
     * @param null|string $pagetoken
     * @param null|string $radius
     * @param null|string $rankby
     * @param null|string $type
     */
    public function __construct(
        $location,
        $keyword = null,
        $language = null,
        $maxprice = null,
        $minprice = null,
        $name = null,
        $opennow = null,
        $pagetoken = null,
        $radius = null,
        $rankby = null,
        $type = null
    )
    {
        $this->location = $location;
        $this->keyword = $keyword;
        $this->language = $language;
        $this->maxprice = $maxprice;
        $this->minprice = $minprice;
        $this->name = $name;
        $this->opennow = $opennow;
        $this->pagetoken = $pagetoken;
        $this->radius = $radius;
        $this->rankby = $rankby;
        $this->type = $type;
    }

    public function toQueries($data = [])
    {
        return array_filter(array_merge(
            [
                'location' => $this->location,
                'keyword' => $this->keyword,
                'language' => $this->language,
                'maxprice' => $this->maxprice,
                'minprice' => $this->minprice,
                'name' => $this->name,
                'opennow' => $this->opennow,
                'pagetoken' => $this->pagetoken,
                'radius' => $this->radius,
                'rankby' => $this->rankby,
                'type' => $this->type
            ],
            $data
        ));
    }
}
