<?php

//classe abstrata para os Videos
abstract class Video
{
    abstract public function render();
}

class HtmlPlayer extends Video
{
    private $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function render()
    {
        echo '<video>' . $this->url . '</video>';
    }
}

class FlashPlayer extends Video
{
    private $url;

    public function __construct($url)
    {
        $this->url;
    }

    public function render()
    {
        echo '<object>' . $this->url . '</object>';
    }
}

//classe abstrata para as Factorys
abstract class AbstractFactory
{
    abstract function createPlayer($url);
}

//agora crio uma fabrica de video de html player e flasy
class HTMLFactory extends AbstractFactory
{
    public function createPlayer($url)
    {
        return new HtmlPlayer($url);
    }
}

class FLASHFactory extends AbstractFactory
{
    public function createPlayer($url)
    {
        return new FlashPlayer($url);
    }
}

//$fac = new HTMLFactory();
$fac = new FLASHFactory();

$player = $fac->createPlayer(123);
$player->render();



