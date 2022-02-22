<?php

use Heliosugano\Desafio02\PageObject\LoginPageObject;

require __DIR__ . '/../vendor/autoload.php';

$user = 'helio.sugano@forseti.com.br';
$password = 'Forseti2408';

$loginPage = new LoginPageObject();
$token = $loginPage->getToken()->getIterator()->current();

$login = $loginPage
    ->setToken($token)
    ->setUsuario($user)
    ->setSenha($password)
    ->postLogin();

$panelIterator = $login->getIterator();

$horarios = [];
foreach ($panelIterator as $horario) $horarios[] = $horario;
echo '-----------------------------------------------------------------------------' . PHP_EOL;
echo "Inicio do expediente: " . $horarios[0]->horario . PHP_EOL;
echo "Saída para o Intervalo: " . $horarios[1]->horario . PHP_EOL;
echo "Volta do intervalo: " . $horarios[2]->horario . PHP_EOL;
echo "Final do expediente: " . $horarios[3]->horario . PHP_EOL;