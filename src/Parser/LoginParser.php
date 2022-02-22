<?php

namespace Heliosugano\Desafio02\Parser;

use Heliosugano\Desafio02\Iterator\LoginIterator;

class LoginParser extends AbstractParser
{
    /**
     * @throws \Exception
     */
    public function getIterator()
    {
        $xpath = "//div//form//input[@name='_token']";

        return new LoginIterator($this->getHtml(), $xpath);
    }
}