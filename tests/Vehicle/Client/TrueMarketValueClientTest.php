<?php

namespace TudorMatei\Edmunds\Tests\Vehicle\Client;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use TudorMatei\Edmunds\Tests\Vehicle\VehicleClientTest;
use TudorMatei\Edmunds\Vehicle\Client\MakeClient;
use TudorMatei\Edmunds\Vehicle\Client\StyleClient;
use TudorMatei\Edmunds\Vehicle\Client\TrueMarketValueClient;
use TudorMatei\Edmunds\Vehicle\Response\MakesResponse;
use TudorMatei\Edmunds\Vehicle\Response\StyleResponse;
use TudorMatei\Edmunds\Vehicle\Response\StylesResponse;
use TudorMatei\Edmunds\Vehicle\Response\TmvResponse;

/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 2/3/16
 * Time: 8:01 PM
 */
class TrueMarketValueClientTest extends VehicleClientTest
{
    public function testGetTmvPriceForNewCar()
    {
        $body = file_get_contents($this->mockPathPrefix . 'tmv-new-pricing.json');

        $mock = new MockHandler([
            new Response(200, ['Content-Type' => 'application/json'], $body)
        ]);

        $client = $this->getClient($mock);
        $response = $client->getTmvPriceForNewCar(401583112, 90019);

        $this->assertInstanceOf(TmvResponse::class, $response);
    }

    public function testGetStyleDetailsByCarStyleId()
    {
        $body = file_get_contents($this->mockPathPrefix . 'tmv-used-pricing.json');

        $mock = new MockHandler([
            new Response(200, ['Content-Type' => 'application/json'], $body)
        ]);

        $client = $this->getClient($mock);
        $response = $client->getTmvPriceForUsedCar(101353967, 'Clean', 25000, '90019');

        $this->assertInstanceOf(TmvResponse::class, $response);
    }

    protected function getClient(MockHandler $mock)
    {
        $httpClient = new Client(['handler' => HandlerStack::create($mock)]);
        $client = new TrueMarketValueClient('test', $httpClient);
        $client->setDebug(true);
        return $client;
    }
}