<?php

namespace Heliosugano\Desafio02\Iterator;

use Heliosugano\Desafio02\Regex\PanelRegex;
use stdClass;

class PanelIterator extends AbstractIterator
{

    function current()
    {
        $node = $this->crawler->current();

        $obj = new stdClass();
        $regex = new PanelRegex();

        $obj->inicio = $node->getElementsByTagName('td')->item(0)->textContent ?: "Não marcado";
        $obj->saida = $node->getElementsByTagName('td')->item(1)->textContent ?: "Não marcado";
        $obj->volta = $node->getElementsByTagName('td')->item(2)->textContent ?: "Não marcado";
        $obj->final = $node->getElementsByTagName('td')->item(3)->textContent ?: "Não marcado";

        $obj->formatHms = $regex->getRegex($obj);

        $obj->formatHoras = $regex->getRegex($obj)->horas;
        $obj->formatMinutos = $regex->getRegex($obj)->minutos;
        $obj->formatSegundos = $regex->getRegex($obj)->segundos;

        return $obj;
    }
}