<?php

namespace Heliosugano\Desafio02\Parser;

use Heliosugano\Desafio02\Iterator\PanelIterator;
use Heliosugano\Desafio02\Iterator\LoginIterator;

class PanelParser extends AbstractParser
{
    /**
     * @throws \Exception
     */
    public function getIterator()
    {
        $xpath = "//table//tbody//tr//td";

        return new PanelIterator($this->getHtml(), $xpath);
    }
}