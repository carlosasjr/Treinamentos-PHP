<?php

interface ComamndInterface
{
    public function execute();
}

class Luz
{
    private $status;

    public function ligar()
    {
        $this->status = 'on';
    }

    public function desligar()
    {
        $this->status = 'off';
    }

    public function getStatus()
    {
        return $this->status;
    }
}

class LuzOnCommand implements ComamndInterface
{
    private $luz;

    public function __construct(Luz $luz)
    {
        $this->luz = $luz;
    }

    public function execute()
    {
        $this->luz->ligar();
    }
}

class LuzOffCommand implements ComamndInterface
{
    private $luz;

    public function __construct(Luz $luz)
    {
        $this->luz = $luz;
    }

    public function execute()
    {
        $this->luz->desligar();
    }
}

function callCommand(ComamndInterface $command)
{
    $command->execute();
}