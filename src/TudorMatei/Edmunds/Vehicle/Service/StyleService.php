<?php
namespace TudorMatei\Edmunds\Vehicle\Service;

use TudorMatei\Edmunds\Vehicle\Response\StyleResponse;
use TudorMatei\Edmunds\Vehicle\Response\StylesResponse;
use TudorMatei\Edmunds\Vehicle\VehicleClient;

class StyleService
{
    protected $client;

    public function __construct(VehicleClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get the vehicle style details (i.e. colors, options, transmission, engine, squishVins, …etc)
     * by the vehicle’s Make/Mode/Year information.
     * The style ID of a vehicle is available in the responses of the model and model year endpoints.
     *
     * @return StylesResponse
     */
    public function getDetailsByCarMakeModelYear($make, $model, $year)
    {
        $data = [];
        return $this->client->request($make . '/' . $model . '/' . $year . '/styles', $data, 2, StylesResponse::class);
    }

    /**
     * Get the vehicle style details (i.e. colors, options, transmission, engine, squishVins, …etc)
     * by the vehicle’s style ID.
     * The style ID of a vehicle is available in the responses of the model and model year endpoints.
     *
     * @param string $styleId - Car style ID
     * @param string $view - view can be basic or full
     * @return StyleResponse
     */
    public function getStyleDetailsByCarStyleId($styleId, $view = 'full')
    {
        $data = [
            'view' => $view
        ];

        return $this->client->request('styles/' . $styleId, $data, 2, StyleResponse::class);
    }
}