<?php
namespace Edmunds\Vehicle\Service;

use Edmunds\Vehicle\Response\MakesResponse;
use Edmunds\Vehicle\VehicleClient;

class MakeService
{
    protected $client;

    public function __construct(VehicleClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get the list of car makes
     * @return MakesResponse
     */
    public function getListOfCarMakes()
    {
        $data = [];
        return $this->client->request('makes', $data, 2, MakesResponse::class);
    }
}