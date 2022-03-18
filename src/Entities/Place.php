<?php

namespace Redzjovi\GoogleMapsPlace\Entities;

class Place
{
    /**
     * @var null|string
     */
    public $address_components;

    /**
     * @var null|string
     */
    public $adr_address;

    /**
     * @var null|string
     */
    public $business_status;

    /**
     * @var null|string
     */
    public $formatted_address;

    /**
     * @var null|string
     */
    public $formatted_phone_number;

    /**
     * @var null|Geometry
     */
    public $geometry;

    /**
     * @var null|string
     */
    public $icon;

    /**
     * @var null|string
     */
    public $icon_background_color;

    /**
     * @var null|string
     */
    public $icon_mask_base_uri;

    /**
     * @var null|string
     */
    public $international_phone_number;

    /**
     * @var null|string
     */
    public $name;

    /**
     * @var null|PlaceOpeningHours
     */
    public $opening_hours;

    /**
     * @var null|bool
     */
    public $permanently_closed;

    /**
     * @var PlacePhoto[]
     */
    public $photos = [];

    /**
     * @var null|string
     */
    public $place_id;

    /**
     * @var null|PlusCode
     */
    public $plus_code;

    /**
     * @var null|int
     */
    public $price_level;

    /**
     * @var null|float
     */
    public $rating;

    /**
     * @var null|string
     */
    public $reference;

    /**
     * @var PlaceReview[]
     */
    public $reviews = [];

    /**
     * @var null|string
     */
    public $scope;

    /**
     * @var string[]
     */
    public $types = [];

    /**
     * @var null|string
     */
    public $url;

    /**
     * @var null|float
     */
    public $user_ratings_total;

    /**
     * @var null|int
     */
    public $utc_offset;

    /**
     * @var null|string
     */
    public $vicinity;

    /**
     * @var null|string
     */
    public $website;

    /**
     * @param array $data
     */
    public function __construct($data)
    {
        if (isset($data['address_components'])) {
            $this->address_components = strval($data['address_components']);
        }
        if (isset($data['adr_address'])) {
            $this->adr_address = strval($data['adr_address']);
        }
        if (isset($data['business_status'])) {
            $this->business_status = strval($data['business_status']);
        }
        if (isset($data['formatted_address'])) {
            $this->formatted_address = strval($data['formatted_address']);
        }
        if (isset($data['formatted_phone_number'])) {
            $this->formatted_phone_number = strval($data['formatted_phone_number']);
        }
        if (isset($data['geometry'])) {
            $this->geometry = new Geometry($data['geometry']);
        }
        if (isset($data['icon'])) {
            $this->icon = strval($data['icon']);
        }
        if (isset($data['icon_background_color'])) {
            $this->icon_background_color = strval($data['icon_background_color']);
        }
        if (isset($data['icon_mask_base_uri'])) {
            $this->icon_mask_base_uri = strval($data['icon_mask_base_uri']);
        }
        if (isset($data['international_phone_number'])) {
            $this->international_phone_number = strval($data['international_phone_number']);
        }
        if (isset($data['name'])) {
            $this->name = strval($data['name']);
        }
        if (isset($data['opening_hours'])) {
            $this->opening_hours = new PlaceOpeningHours($data['opening_hours']);
        }
        if (isset($data['permanently_closed'])) {
            $this->permanently_closed = boolval($data['permanently_closed']);
        }
        if (isset($data['photos']) && is_array($data['photos'])) {
            foreach ($data['photos'] as $photo) {
                $this->photos[] = new PlacePhoto($photo);
            }
        }
        if (isset($data['place_id'])) {
            $this->place_id = strval($data['place_id']);
        }
        if (isset($data['plus_code'])) {
            $this->plus_code = new PlusCode($data['plus_code']);
        }
        if (isset($data['price_level'])) {
            $this->price_level = intval($data['price_level']);
        }
        if (isset($data['rating'])) {
            $this->rating = floatval($data['rating']);
        }
        if (isset($data['reference'])) {
            $this->reference = strval($data['reference']);
        }
        if (isset($data['reviews']) && is_array($data['reviews'])) {
            foreach ($data['reviews'] as $review) {
                $this->reviews[] = new PlaceReview($review);
            }
        }
        if (isset($data['scope'])) {
            $this->scope = strval($data['scope']);
        }
        if (isset($data['types']) && is_array($data['types'])) {
            foreach ($data['types'] as $type) {
                $this->types[] = strval($type);
            }
        }
        if (isset($data['url'])) {
            $this->url = strval($data['url']);
        }
        if (isset($data['user_ratings_total'])) {
            $this->user_ratings_total = floatval($data['user_ratings_total']);
        }
        if (isset($data['utc_offset'])) {
            $this->utc_offset = intval($data['utc_offset']);
        }
        if (isset($data['vicinity'])) {
            $this->vicinity = strval($data['vicinity']);
        }
        if (isset($data['website'])) {
            $this->website = strval($data['website']);
        }
    }
}
