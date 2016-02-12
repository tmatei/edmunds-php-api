<?php

namespace Edmunds\Tests\Vehicle;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use Edmunds\Tests\BaseTest;
use Edmunds\Vehicle\VehicleClient;

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

    /**
     * @param MockHandler $mock
     * @return VehicleClient
     */
    protected function getClient(MockHandler $mock)
    {
        $httpClient = new Client(['handler' => HandlerStack::create($mock)]);
        $client = new VehicleClient('test', $httpClient);
        $client->setDebug(true);
        return $client;
    }

}