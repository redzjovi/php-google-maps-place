<?php

namespace Redzjovi\GoogleMapsPlace\Enums;

abstract class PlacesSearchStatus
{
    const OK = 'OK';
    const ZERO_RESULTS = 'ZERO_RESULTS';
    const INVALID_REQUEST = 'INVALID_REQUEST';
    const OVER_QUERY_LIMIT = 'OVER_QUERY_LIMIT';
    const REQUEST_DENIED = 'REQUEST_DENIED';
    const UNKNOWN_ERROR = 'UNKNOWN_ERROR';
}
