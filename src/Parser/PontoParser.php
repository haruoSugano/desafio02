<?php

namespace Heliosugano\Desafio02\Parser;

use Heliosugano\Desafio02\Iterator\PontoIterator;

class PontoParser extends AbstractParser
{
    /**
     * @throws \Exception
     */
    public function getIterator()
    {
        $xpath = $this->crawler->filterXPath("//div//form//input[@name='_token']")->attr('value');

        return $xpath;
    }
}