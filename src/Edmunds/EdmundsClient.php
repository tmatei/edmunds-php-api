<?php

namespace Edmunds;

use Doctrine\Common\Annotations\AnnotationRegistry;
use GuzzleHttp\Client;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\SerializerBuilder;

abstract class EdmundsClient
{
    const DEFAULT_BASE_URL = 'https://api.edmunds.com/';

    /**
     * Base URL
     *
     * @var string
     */
    protected $baseUrl;

    /**
     * API Key
     *
     * @var string
     */
    protected $apiKey;

    /**
     * API endpoint
     *
     * @var string
     */
    protected $endpoint;

    /**
     * @var \GuzzleHttp\Client
     */
    protected $httpClient;

    /**
     * @var bool
     */
    protected $debug = false;

    public function __construct($apiKey, Client $httpClient = null)
    {
        AnnotationRegistry::registerLoader('class_exists');

        if (is_null($httpClient)) {
            $httpClient = new Client();
        }

        $this->apiKey = $apiKey;
        $this->httpClient = $httpClient;
    }

    /**
     * @return \GuzzleHttp\Client
     */
    public function getHttpClient()
    {
        return $this->httpClient;
    }

    public function isDebug()
    {
        return $this->debug;
    }

    public function setDebug($debug)
    {
        $this->debug = (boolean) $debug;
    }

    private function generateUrl($method, $version)
    {
        # set up the base url
        $baseUrl = self::DEFAULT_BASE_URL;
        if($this->baseUrl !== null){
            $baseUrl = $this->baseUrl;
        }

        if ($version == 1) {
            $endpoint = 'v1/api/' . $method ;
        } else if ($version == 2) {
            $endpoint = 'api/'. $this->endpoint. '/v2/' . $method;
        } else {
            throw new Exception('Only v1 and v2 are supported.');
        }

        return $baseUrl . $endpoint;
    }

    public function request($method, $data = array(), $version = 2, $deserializeTo = null)
    {
        $serializer = SerializerBuilder::create()
            ->setPropertyNamingStrategy(new IdenticalPropertyNamingStrategy())
            ->setDebug($this->isDebug())
            ->build();

        # set up the data
        $queryData = array_merge(array(
            'api_key' => $this->apiKey,
            'fmt' => 'json'
        ), $data);

        # get the request
        $response = $this->httpClient->request('GET', $this->generateUrl($method, $version), [
            'query' => $queryData
        ]);

        $responseBodyString = (String) $response->getBody();

        if (is_null($deserializeTo)) {
            $responseBody = json_decode($responseBodyString, true);
        } else {
            $responseBody = $serializer->deserialize($responseBodyString, $deserializeTo, 'json');
        }

        return $responseBody;
    }
}