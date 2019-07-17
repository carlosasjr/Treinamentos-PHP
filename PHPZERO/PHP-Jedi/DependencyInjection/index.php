<?php

interface ServiceInterfaceVideo
{
    public function videoEmbed();
}

abstract class Video
{
    protected $url;

    public function __construct($url)
    {
        $this->url = $url;
    }
}

class YouTube extends Video implements ServiceInterfaceVideo
{
    public function videoEmbed()
    {
        return '<iframe>' . $this->url . '</iframe>';
    }
}

class Vimeo extends Video implements ServiceInterfaceVideo
{
    public function videoEmbed()
    {
        return '<video>' . $this->url . '</video>';
    }
}

class Aula
{
    private $video;

    public function __construct(ServiceInterfaceVideo $video)
    {
        $this->video = $video;
    }

    public function getHTMLVideo()
    {
        return $this->video->videoEmbed();
    }

}


$aula = new Aula(new Vimeo(123));
echo $aula->getHTMLVideo();

