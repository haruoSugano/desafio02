<?php

namespace Heliosugano\Desafio02\Iterator;

class LoginIterator extends AbstractIterator
{
    function current()
    {
        $node = $this->crawler->current();

        return $node->attributes->item(2)->textContent;
    }
}