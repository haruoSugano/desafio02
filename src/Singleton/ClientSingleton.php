<?php

namespace Heliosugano\Desafio02\Singleton;

use GuzzleHttp\Client;
use Heliosugano\Desafio02\Enums\Urls;

class ClientSingleton
{
    // Realiza a requisição e armazena as informação da primeira vez até o término da execução ou caso acontenca algo
    // é trocado
    use Singleton;

    private static function createInstance()
    {
        $config = [
            'debug' => false,
            'headers' => [
                'User-Agent' => Urls::USER_AGENT,
            ],
            'cookies' => true,
            'verify' => false,
        ];

        return new Client($config);
    }
}