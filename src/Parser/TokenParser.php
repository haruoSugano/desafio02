<?php

namespace Heliosugano\Desafio02\Parser;

use Heliosugano\Desafio02\Iterator\TokenIterator;

class TokenParser extends AbstractParser
{
    /**
     * @throws \Exception
     */
    public function getIterator()
    {
        $xpath = "//div//form//input[@name='_token']";

        return new TokenIterator($this->getHtml(), $xpath);
    }
}