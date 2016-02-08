<?php

namespace TudorMatei\Edmunds\Tests\Vehicle\Service;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use TudorMatei\Edmunds\Tests\Vehicle\VehicleClientTest;
use TudorMatei\Edmunds\Vehicle\Response\MakesResponse;
use TudorMatei\Edmunds\Vehicle\Service\MakeService;

/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 2/3/16
 * Time: 8:01 PM
 */
class MakeServiceTest extends VehicleClientTest
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

        $service = new MakeService($this->getClient($mock));
        $response = $service->getListOfCarMakes();

        $this->assertInstanceOf(MakesResponse::class, $response);
    }

}