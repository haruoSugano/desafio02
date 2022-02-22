<?php

namespace Heliosugano\Desafio02\Factory;

use GuzzleHttp\Client;
use Heliosugano\Desafio02\Enums\Urls;


class GuzzleClientFactory
{
    // Realiza a requisição, mas não é armazenada a informação da primeira
    //Não está sendo utilizado, deixado para anotação..
    public static function getInstance()
    {
        $config = [
          'cookies' => true,
          'verify' => false,
          'headers' => [
              'User-Agent' => Urls::USER_AGENT
          ]
        ];

        return new Client($config);
    }

}