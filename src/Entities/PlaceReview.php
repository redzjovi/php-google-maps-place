<?php

namespace Redzjovi\GoogleMapsPlace\Entities;

class PlaceReview
{
    /**
     * @var string
     */
    public $author_name;

    /**
     * @var int
     */
    public $rating;

    /**
     * @var string
     */
    public $relative_time_description;

    /**
     * @var int
     */
    public $time;

    /**
     * @var null|string
     */
    public $author_url;

    /**
     * @var null|string
     */
    public $language;

    /**
     * @var null|string
     */
    public $profile_photo_url;

    /**
     * @var null|string
     */
    public $text;

    /**
     * @param array $data
     */
    public function __construct($data)
    {
        $this->author_name = strval($data['author_name']);
        $this->rating = intval($data['rating']);
        $this->relative_time_description = strval($data['relative_time_description']);
        $this->time = intval($data['time']);
        if (isset($data['author_url'])) {
            $this->author_url = strval($data['author_url']);
        }
        if (isset($data['language'])) {
            $this->language = strval($data['language']);
        }
        if (isset($data['profile_photo_url'])) {
            $this->profile_photo_url = strval($data['profile_photo_url']);
        }
        if (isset($data['text'])) {
            $this->text = strval($data['text']);
        }
    }
}
