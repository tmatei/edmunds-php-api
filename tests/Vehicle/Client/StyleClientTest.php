<?php

namespace TudorMatei\Edmunds\Tests\Vehicle\Client;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use TudorMatei\Edmunds\Tests\Vehicle\VehicleClientTest;
use TudorMatei\Edmunds\Vehicle\Client\MakeClient;
use TudorMatei\Edmunds\Vehicle\Client\StyleClient;
use TudorMatei\Edmunds\Vehicle\Response\MakesResponse;
use TudorMatei\Edmunds\Vehicle\Response\StyleResponse;
use TudorMatei\Edmunds\Vehicle\Response\StylesResponse;

/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 2/3/16
 * Time: 8:01 PM
 */
class StyleClientTest extends VehicleClientTest
{
    public function setUp()
    {
        parent::setUp();
    }

    public function testGetDetailsByCarMakeModelYear()
    {
        $body = file_get_contents($this->mockPathPrefix . 'styles.json');

        $mock = new MockHandler([
            new Response(200, ['Content-Type' => 'application/json'], $body)
        ]);

        $client = $this->getClient($mock);
        $response = $client->getDetailsByCarMakeModelYear('lexus', 'rx350', 2011);

        $this->assertInstanceOf(StylesResponse::class, $response);
    }

    public function testGetStyleDetailsByCarStyleId()
    {
        $body = file_get_contents($this->mockPathPrefix . 'full-style-details.json');

        $mock = new MockHandler([
            new Response(200, ['Content-Type' => 'application/json'], $body)
        ]);

        $client = $this->getClient($mock);
        $response = $client->getStyleDetailsByCarStyleId(101353967, 'full');

        $this->assertInstanceOf(StyleResponse::class, $response);
    }

    protected function getClient(MockHandler $mock)
    {
        $httpClient = new Client(['handler' => HandlerStack::create($mock)]);
        $client = new StyleClient('test', $httpClient);
        $client->setDebug(true);
        return $client;
    }

}