<?php

use Heliosugano\Desafio02\PageObject\LoginPageObject;
use Heliosugano\Desafio02\PageObject\TokenPageObject;

require __DIR__ . '/../vendor/autoload.php';

$user = 'helio.sugano@forseti.com.br';
$password = 'Forseti2408';

$tokenPage = new TokenPageObject();
$token = $tokenPage->getToken()->getIterator()->current();
print_r($token . PHP_EOL);
$loginPage = new LoginPageObject();

$login = $loginPage
    ->setUsuario($user)
    ->setSenha($password)
    ->postLogin($token);
print_r($token . PHP_EOL);
print_r($login);
