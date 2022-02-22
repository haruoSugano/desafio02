<?php

namespace Heliosugano\Desafio02\PageObject;

use GuzzleHttp\ClientInterface;
use Heliosugano\Desafio02\Factory\GuzzleClientFactory;
use Heliosugano\Desafio02\Singleton\ClientSingleton;
use Heliosugano\Desafio02\Traits\ForsetiLoggerTrait;

abstract class AbstractPageObject
{
    use ForsetiLoggerTrait;

    protected $client;

    public function __construct()
    {
        $this->client = ClientSingleton::getInstance();
    }

    public function request($method, $uri, $options = [])
    {
        try {
            return $this->client->request($method, $uri, $options);
        } catch (\Exception $e){
            $this->error($e->getMessage());
            return null;
        }
    }
}