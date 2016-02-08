<?php

namespace TudorMatei\Edmunds\Tests\Vehicle;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use TudorMatei\Edmunds\Tests\BaseTest;
use TudorMatei\Edmunds\Vehicle\Client\Vehicle\VinDecodingClient;
use TudorMatei\Edmunds\Vehicle\Response\VinDecodingResponse;

/**
 * Created by IntelliJ IDEA.
 * User: tudor
 * Date: 2/3/16
 * Time: 8:01 PM
 */
abstract class VehicleClientTest extends BaseTest
{
    protected $mockPathPrefix;

    public function setUp()
    {
        parent::setUp();
        $this->mockPathPrefix = __DIR__ . DIRECTORY_SEPARATOR . 'mocks' . DIRECTORY_SEPARATOR;
    }

}