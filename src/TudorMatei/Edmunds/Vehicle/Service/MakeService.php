<?php
namespace TudorMatei\Edmunds\Vehicle\Service;

use TudorMatei\Edmunds\Vehicle\Response\MakesResponse;
use TudorMatei\Edmunds\Vehicle\VehicleClient;

class MakeService
{
    protected $client;

    public function __construct(VehicleClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get the list of car makes
     * @return mixed
     */
    public function getListOfCarMakes()
    {
        $data = [];
        return $this->client->request('makes', $data, 2, MakesResponse::class);
    }
}