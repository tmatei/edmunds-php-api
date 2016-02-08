<?php
namespace TudorMatei\Edmunds\Vehicle\Client;

use TudorMatei\Edmunds\Vehicle\Response\MakesResponse;
use TudorMatei\Edmunds\Vehicle\VehicleClient;

class MakeClient extends VehicleClient
{

    /**
     * Get the list of car makes
     * @return mixed
     */
    public function getListOfCarMakes()
    {
        $data = [];
        return $this->request('makes', $data, 2, MakesResponse::class);
    }
}