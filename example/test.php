<?php

use Heliosugano\Desafio02\PageObject\PontoPageObject;

require __DIR__ . '/../vendor/autoload.php';

$user = 'helio.sugano@forseti.com.br';
$password = 'Forseti2408';

$loginPage = new PontoPageObject();

$login = $loginPage
    ->setUsuario($user)
    ->setSenha($password)
    ->postLogin();

$horarios = $login->getIterator()->current();

echo '-----------------------------------------------------------------------------' . PHP_EOL;
echo "Inicio do expediente: " . $horarios->inicio . PHP_EOL;
echo "Saída para o Intervalo: " . $horarios->saida . PHP_EOL;
echo "Volta do intervalo: " . $horarios->volta . PHP_EOL;
echo "Final do expediente: " . $horarios->final . PHP_EOL;

print_r($horarios->formatHms->horas[0] . PHP_EOL);
print_r($horarios->formatHms->minutos[0] .PHP_EOL);
print_r($horarios->formatHms->segundos[0] .PHP_EOL);