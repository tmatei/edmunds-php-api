<?php
namespace TudorMatei\Edmunds\Vehicle\Service;

use TudorMatei\Edmunds\Vehicle\Response\TmvResponse;
use TudorMatei\Edmunds\Vehicle\VehicleClient;

class TrueMarketValueService
{
    protected $client;

    public function __construct(VehicleClient $client)
    {
        $this->client = $client;
    }

    /**
     * Get the TMV® price for a old car by style ID, condition, mileage and ZIP code.
     * Make sure to see the Special Requirements for displaying the Edmunds True Market Value®.
     *
     * @param $styleId
     * @param $condition
     * @param $mileage
     * @param $zip
     * @return TmvResponse
     */
    public function getTmvPriceForUsedCar($styleId, $condition, $mileage, $zip)
    {
        $data = [
            'styleid' => $styleId,
            'condition' => $condition,
            'mileage' => $mileage,
            'zip' => $zip,
        ];

        return $this->client->request('tmv/tmvservice/calculateusedtmv', $data, 1, TmvResponse::class);
    }

    /**
     * Get the TMV® price for a new car by style ID, condition, mileage and ZIP code.
     * Make sure to see the Special Requirements for displaying the Edmunds True Market Value®.
     *
     * @param $styleId
     * @param $zip
     * @return TmvResponse
     */
    public function getTmvPriceForNewCar($styleId, $zip)
    {
        $data = [
            'styleid' => $styleId,
            'zip' => $zip,
        ];

        return $this->client->request('tmv/tmvservice/calculatenewtmv', $data, 1, TmvResponse::class);
    }

}
