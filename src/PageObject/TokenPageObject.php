<?php

namespace Heliosugano\Desafio02\PageObject;

use Heliosugano\Desafio02\Enums\Urls;
use Heliosugano\Desafio02\Parser\TokenParser;
use Heliosugano\Desafio02\Traits\ForsetiLoggerTrait;

class TokenPageObject extends AbstractPageObject
{

    use ForsetiLoggerTrait;

    /**
     * @throws \Exception
     */
    public function getToken()
    {
        $this->info('Capturando o token...');
        $response = $this->request('GET', Urls::LOGIN);

        return new TokenParser($response->getBody()->getContents());
    }
}