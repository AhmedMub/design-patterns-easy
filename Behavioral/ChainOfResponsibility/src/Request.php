<?php

namespace DesignPatternEasy\Behavioral\ChainOfResponsibility;

class Request
{
    protected $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}
