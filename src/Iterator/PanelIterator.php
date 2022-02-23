<?php

namespace Heliosugano\Desafio02\Iterator;

use stdClass;

class PanelIterator extends AbstractIterator
{

    function current()
    {
        $node = $this->crawler->current();

        $obj = new stdClass();

        $obj->inicio = $node->getElementsByTagName('td')->item(0)->textContent ?: "Não marcado";
        $obj->saida = $node->getElementsByTagName('td')->item(1)->textContent ?: "Não marcado";
        $obj->volta = $node->getElementsByTagName('td')->item(2)->textContent ?: "Não marcado";
        $obj->final = $node->getElementsByTagName('td')->item(3)->textContent ?: "Não marcado";

        return $obj;
    }
}