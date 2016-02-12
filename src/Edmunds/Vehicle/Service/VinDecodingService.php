<?php
namespace Edmunds\Vehicle\Service;

use Edmunds\Vehicle\Response\VinDecodingResponse;
use Edmunds\Vehicle\VehicleClient;

class VinDecodingService
{
    protected $client;

    public function __construct(VehicleClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param $vin
     * @return VinDecodingResponse
     */
    public function getVinDetails($vin)
    {
        return $this->client->request('vins/' . urlencode($vin), [], 2, VinDecodingResponse::class);
    }
}