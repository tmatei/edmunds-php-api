<?php
namespace Edmunds\Vehicle;

use Edmunds\Client;
use Edmunds\EdmundsClient;
use Edmunds\Vehicle\Response\VinDecodingResponse;

class VehicleClient extends EdmundsClient
{
    protected $endpoint = 'vehicle';
}