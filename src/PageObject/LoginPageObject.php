<?php

namespace Heliosugano\Desafio02\PageObject;

use Heliosugano\Desafio02\Beans\Auth;
use Heliosugano\Desafio02\Enums\Urls;
use Heliosugano\Desafio02\Parser\PanelParser;
use Heliosugano\Desafio02\Parser\LoginParser;
use Heliosugano\Desafio02\Traits\ForsetiLoggerTrait;

class LoginPageObject extends AbstractPageObject
{
    use Auth;
    use ForsetiLoggerTrait;

    /**
     * @throws \Exception
     */
    public function postLogin()
    {
        $this->info('Realizando login...');
        $response = $this->request('POST', Urls::LOGIN, [
            'form_params' => [
                '_token' => $this->getToken()->getIterator()->current(),
                'email' => $this->usuario,
                'password' => $this->senha,
                'remember' => false
            ]
        ]);

        return new PanelParser($response->getBody()->getContents());
    }

    /**
     * @throws \Exception
     */
    public function getToken()
    {
        $this->info('Capturando o token...');
        $response = $this->request('GET', Urls::LOGIN);

        return new LoginParser($response->getBody()->getContents());
    }
}