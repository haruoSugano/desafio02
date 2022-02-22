<?php

namespace Heliosugano\Desafio02\Iterator;

use stdClass;

class PanelIterator extends AbstractIterator
{

    function current()
    {
        $node = $this->crawler->current();

        $obj = new stdClass();
        if (null != $node->textContent){
            $obj->horario = $node->textContent;
        }
        else {
            $obj->horario = 'Não marcado';
        }
        return $obj;
    }
}