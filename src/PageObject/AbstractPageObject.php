<?php

namespace Heliosugano\Desafio02\PageObject;

use GuzzleHttp\ClientInterface;
use Heliosugano\Desafio02\Factory\GuzzleClientFactory;
use Heliosugano\Desafio02\Traits\ForsetiLoggerTrait;

abstract class AbstractPageObject
{
    use ForsetiLoggerTrait;

    protected $client;

    public function __construct(ClientInterface $client = null)
    {
        $this->client = ($client) ? $client : GuzzleClientFactory::getInstance();
    }

    public function request($method, $uri, $options = [])
    {
        try {
            return $this->client->request($method, $uri, $options);
        } catch (\Exception $erro){
            $this->error($erro->getMessage());
            return null;
        }
    }
}