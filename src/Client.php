<?php

namespace Redzjovi\GoogleMapsPlace;

use GuzzleHttp\Client as GuzzleHttpClient;
use Redzjovi\GoogleMapsPlace\Requests\FindPlaceRequest;
use Redzjovi\GoogleMapsPlace\Requests\NearbySearchRequest;
use Redzjovi\GoogleMapsPlace\Requests\TextSearchRequest;
use Redzjovi\GoogleMapsPlace\Responses\FindPlaceResponse;
use Redzjovi\GoogleMapsPlace\Responses\NearbySearchResponse;
use Redzjovi\GoogleMapsPlace\Responses\TextSearchResponse;

class Client
{
    /**
     * @param string $key
     */
    private $key;

    private $output = 'json';

    private $uri = 'https://maps.googleapis.com/maps/api/place';

    /**
     * @param string $key
     */
    public function __construct($key)
    {
        $this->key = $key;
    }

    /**
     * @param FindPlaceRequest $request
     * @return FindPlaceResponse
     */
    public function findPlace($request)
    {
        $httpClientResponse = $this->getHttpClient()->get(
            $this->uri.'/findplacefromtext/'.$this->output,
            ['query' => $request->toQueries(['key' => $this->key])]
        );

        $contents = json_decode($httpClientResponse->getBody()->getContents(), true);

        return new FindPlaceResponse($contents);
    }

    /**
     * @param NearbySearchRequest $request
     * @return NearbySearchResponse
     */
    public function nearbySearch($request)
    {
        $httpClientResponse = $this->getHttpClient()->get(
            $this->uri.'/nearbysearch/'.$this->output,
            ['query' => $request->toQueries(['key' => $this->key])]
        );

        $contents = json_decode($httpClientResponse->getBody()->getContents(), true);

        return new NearbySearchResponse($contents);
    }

    /**
     * @param TextSearchRequest $request
     * @return TextSearchResponse
     */
    public function textSearch($request)
    {
        $httpClientResponse = $this->getHttpClient()->get(
            $this->uri.'/textsearch/'.$this->output,
            ['query' => $request->toQueries(['key' => $this->key])]
        );

        $contents = json_decode($httpClientResponse->getBody()->getContents(), true);

        return new TextSearchResponse($contents);
    }

    private function getHttpClient()
    {
        return new GuzzleHttpClient();
    }
}
