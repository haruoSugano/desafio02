<?php

namespace Heliosugano\Desafio02\Iterator;

class TokenIterator extends AbstractIterator
{
    function current()
    {
        $node = $this->crawler->current();

        return $node->attributes->item(2)->textContent;
    }
}