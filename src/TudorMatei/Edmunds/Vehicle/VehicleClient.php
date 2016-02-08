<?php
namespace TudorMatei\Edmunds\Vehicle;

use TudorMatei\Edmunds\Client;
use TudorMatei\Edmunds\EdmundsClient;
use TudorMatei\Edmunds\Vehicle\Response\VinDecodingResponse;

abstract class VehicleClient extends EdmundsClient
{
    protected $endpoint = 'vehicle';
}