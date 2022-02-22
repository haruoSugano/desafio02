<?php

namespace Heliosugano\Desafio02\PageObject;

use Heliosugano\Desafio02\Beans\Auth;
use Heliosugano\Desafio02\Enums\Urls;
use Heliosugano\Desafio02\Traits\ForsetiLoggerTrait;

class LoginPageObject extends AbstractPageObject
{
    use Auth;
    use ForsetiLoggerTrait;

    public function postLogin($token)
    {
        $this->info('Realizando login...');
        $response = $this->request('POST', Urls::LOGIN, [
            'form_params' => [
                '_token' => $token,
                'email' => $this->usuario,
                'password' => $this->senha,
                'remember' => false
            ]
        ]);

        return $response->getBody()->getContents();
    }
}