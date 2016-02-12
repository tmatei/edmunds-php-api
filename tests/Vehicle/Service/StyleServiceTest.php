<?php

namespace Edmunds\Tests\Vehicle\Service;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use Edmunds\Tests\Vehicle\VehicleClientTest;
use Edmunds\Vehicle\Response\StyleResponse;
use Edmunds\Vehicle\Response\StylesResponse;
use Edmunds\Vehicle\Service\StyleService;

/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 2/3/16
 * Time: 8:01 PM
 */
class StyleServiceTest extends VehicleClientTest
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

        $service = new StyleService($this->getClient($mock));
        $response = $service->getDetailsByCarMakeModelYear('lexus', 'rx350', 2011);

        $this->assertInstanceOf(StylesResponse::class, $response);
    }

    public function testGetStyleDetailsByCarStyleId()
    {
        $body = file_get_contents($this->mockPathPrefix . 'full-style-details.json');

        $mock = new MockHandler([
            new Response(200, ['Content-Type' => 'application/json'], $body)
        ]);

        $service = new StyleService($this->getClient($mock));
        $response = $service->getStyleDetailsByCarStyleId(101353967, 'full');

        $this->assertInstanceOf(StyleResponse::class, $response);
    }

}