<?php

namespace Edmunds\Tests\Vehicle\Service;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use Edmunds\Tests\Vehicle\VehicleClientTest;
use Edmunds\Vehicle\Response\TmvResponse;
use Edmunds\Vehicle\Service\TrueMarketValueService;

/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 2/3/16
 * Time: 8:01 PM
 */
class TrueMarketValueServiceTest extends VehicleClientTest
{
    public function testGetTmvPriceForNewCar()
    {
        $body = file_get_contents($this->mockPathPrefix . 'tmv-new-pricing.json');

        $mock = new MockHandler([
            new Response(200, ['Content-Type' => 'application/json'], $body)
        ]);

        $service = new TrueMarketValueService($this->getClient($mock));
        $response = $service->getTmvPriceForNewCar(401583112, 90019);

        $this->assertInstanceOf(TmvResponse::class, $response);
    }

    public function testGetStyleDetailsByCarStyleId()
    {
        $body = file_get_contents($this->mockPathPrefix . 'tmv-used-pricing.json');

        $mock = new MockHandler([
            new Response(200, ['Content-Type' => 'application/json'], $body)
        ]);

        $service = new TrueMarketValueService($this->getClient($mock));
        $response = $service->getTmvPriceForUsedCar(101353967, 'Clean', 25000, '90019');

        $this->assertInstanceOf(TmvResponse::class, $response);
    }

}