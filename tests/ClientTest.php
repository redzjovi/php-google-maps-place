<?php

namespace Redzjovi\GoogleMapsPlace\Tests;

use Redzjovi\GoogleMapsPlace\Enums\PlacesSearchStatus;
use Redzjovi\GoogleMapsPlace\Requests\FindPlaceRequest;
use Redzjovi\GoogleMapsPlace\Requests\NearbySearchRequest;
use Redzjovi\GoogleMapsPlace\Requests\TextSearchRequest;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    private function getClient()
    {
        return new \Redzjovi\GoogleMapsPlace\Client(
            getenv('GOOGLE_MAPS_PLACE_KEY')
        );
    }

    public function test_find_place()
    {
        $response = $this->getClient()->findPlace(new FindPlaceRequest(
            'Jakarta',
            FindPlaceRequest::INPUTTYPE_TEXTQUERY
        ));

        $this->assertEquals(PlacesSearchStatus::OK, $response->status);
        $this->assertNotEmpty($response);
    }

    public function test_nearby_search()
    {
        $response = $this->getClient()->nearbySearch(new NearbySearchRequest(
            '-6.229728,106.6894312'
        ));

        $this->assertEquals(PlacesSearchStatus::OK, $response->status);
        $this->assertNotEmpty($response);
    }

    public function test_search()
    {
        $response = $this->getClient()->textSearch(new TextSearchRequest(
            'Jakarta'
        ));

        $this->assertEquals(PlacesSearchStatus::OK, $response->status);
        $this->assertNotEmpty($response);
    }
}
