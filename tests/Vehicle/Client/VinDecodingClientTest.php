<?php

namespace TudorMatei\Edmunds\Tests\Vehicle\Client;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use TudorMatei\Edmunds\Tests\Vehicle\VehicleClientTest;
use TudorMatei\Edmunds\Vehicle\Client\VinDecodingClient;
use TudorMatei\Edmunds\Vehicle\Response\VinDecodingResponse;

/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 2/3/16
 * Time: 8:01 PM
 */
class VinDecodingTest extends VehicleClientTest
{
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @@dataProvider vinDataProvider
     * @param $fileName
     */
    public function testGetVinDetails($fileName)
    {
        $body = file_get_contents($this->mockPathPrefix . $fileName);

        $mock = new MockHandler([
            new Response(200, ['Content-Type' => 'application/json'], $body)
        ]);

        $client = $this->getClient($mock);
        $response = $client->getVinDetails('test');

        $this->assertInstanceOf(VinDecodingResponse::class, $response);
    }

    public function vinDataProvider()
    {
        return [
            ['vin-details1.json'],
            ['vin-details2.json'],
        ];
    }

    protected function getClient(MockHandler $mock)
    {
        $httpClient = new Client(['handler' => HandlerStack::create($mock)]);
        $client = new VinDecodingClient('test', $httpClient);
        $client->setDebug(true);
        return $client;
    }
}