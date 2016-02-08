<?php
namespace TudorMatei\Edmunds\Vehicle\Client;

use TudorMatei\Edmunds\Vehicle\Response\VinDecodingResponse;
use TudorMatei\Edmunds\Vehicle\VehicleClient;

class VinDecodingClient extends VehicleClient
{
    /**
     * @param $vin
     * @return VinDecodingResponse
     */
    public function getVinDetails($vin)
    {
        return $this->request('vins/' . urlencode($vin), [], 2, VinDecodingResponse::class);
    }
}