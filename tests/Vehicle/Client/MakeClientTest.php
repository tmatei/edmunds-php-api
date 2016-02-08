<?php

namespace TudorMatei\Edmunds\Tests\Vehicle\Client;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use TudorMatei\Edmunds\Tests\Vehicle\VehicleClientTest;
use TudorMatei\Edmunds\Vehicle\Client\MakeClient;
use TudorMatei\Edmunds\Vehicle\Response\MakesResponse;

/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 2/3/16
 * Time: 8:01 PM
 */
class MakeClientTest extends VehicleClientTest
{
    public function setUp()
    {
        parent::setUp();
    }

    public function testGetListOfCarMakes()
    {
        $body = file_get_contents($this->mockPathPrefix . 'makes.json');

        $mock = new MockHandler([
            new Response(200, ['Content-Type' => 'application/json'], $body)
        ]);

        $vehicleClient = $this->getClient($mock);
        $response = $vehicleClient->getListOfCarMakes();

        $this->assertInstanceOf(MakesResponse::class, $response);
    }

    protected function getClient(MockHandler $mock)
    {
        $httpClient = new Client(['handler' => HandlerStack::create($mock)]);
        $client = new MakeClient('test', $httpClient);
        $client->setDebug(true);
        return $client;
    }

}