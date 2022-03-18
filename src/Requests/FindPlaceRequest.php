<?php

namespace Redzjovi\GoogleMapsPlace\Requests;

/**
 * https://developers.google.com/maps/documentation/places/web-service/search-find-place#FindPlaceRequests
 */
class FindPlaceRequest
{
    const INPUTTYPE_TEXTQUERY = 'textquery';
    const INPUTTYPE_PHONENUMBER = 'phonenumber';

    const LANGUAGE_ENGLISH = 'en';
    const LANGUAGE_INDONESIAN = 'id';

    /**
     * @var string
     */
    public $input;

    /**
     * @var string|self::INPUTTYPE_*
     */
    public $inputtype;

    /**
     * @var string[]
     */
    public $fields = [];

    /**
     * @var null|string|self::LANGUAGE_*
     */
    public $language = '';

    /**
     * @param string $input
     * @param string|self::INPUTTYPE_* $inputtype
     * @param string[] $fields
     * @param null|string|self::LANGUAGE_* $language
     */
    public function __construct(
        $input,
        $inputtype,
        $fields = [],
        $language = null
    )
    {
        $this->input = $input;
        $this->inputtype = $inputtype;
        $this->fields = $fields;
        $this->language = $language;
    }

    public function toQueries($data = [])
    {
        return array_filter(array_merge(
            [
                'input' => $this->input,
                'inputtype' => $this->inputtype,
                'fields' => join(',', $this->fields),
                'language' => $this->language
            ],
            $data
        ));
    }
}
