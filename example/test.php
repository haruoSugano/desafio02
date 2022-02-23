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
echo 'Normal...' . PHP_EOL;
echo "Inicio do expediente: " . $horarios->inicio . PHP_EOL;
echo "Saída para o Intervalo: " . $horarios->saida . PHP_EOL;
echo "Volta do intervalo: " . $horarios->volta . PHP_EOL;
echo "Final do expediente: " . $horarios->final . PHP_EOL;
echo '-----------------------------------------------------------------------------' . PHP_EOL;
echo 'Com regex...' . PHP_EOL;
echo "Inicio do expediente: " . $horarios->formatHoras[0][0] . ':' . $horarios->formatMinutos[0][0] . ':' . $horarios->formatSegundos[0][0] . PHP_EOL;
echo "Saída para o Intervalo: " . $horarios->formatHoras[1][0] . ':' . $horarios->formatMinutos[1][0] . ':' . $horarios->formatSegundos[1][0] . PHP_EOL;
echo "Volta do intervalo: " . $horarios->formatHoras[2][0] . ':' . $horarios->formatMinutos[2][0] . ':' . $horarios->formatSegundos[2][0] . PHP_EOL;
echo "Final do expediente: " . $horarios->formatHoras[3][0] . ':' . $horarios->formatMinutos[3][0] . ':' . $horarios->formatSegundos[3][0] . PHP_EOL;