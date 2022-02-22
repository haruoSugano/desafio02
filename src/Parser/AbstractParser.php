<?php

namespace Heliosugano\Desafio02\Parser;

use Symfony\Component\DomCrawler\Crawler;

abstract class AbstractParser
{
    protected $crawler;

    /**
     * @var string
     */
    protected $html;

    /**
     * @throws \Exception
     */
    public function __construct($html)
    {
        $this->html = $html;
        $this->crawler = new Crawler();
        $this->crawler->addHtmlContent($html);
    }

    /**
     * @return string
     */
    public function getHtml()
    {
        return $this->html;
    }
    
}