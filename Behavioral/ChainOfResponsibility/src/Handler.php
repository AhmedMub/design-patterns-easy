<?php

namespace DesignPatternEasy\Behavioral\ChainOfResponsibility;

abstract class Handler implements HandleInterface
{
    protected $nextHandler;

    public function setNext(Handler $handler)
    {
        $this->nextHandler = $handler;

        return $this->nextHandler;
    }

    public function handle(Request $request)
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }
        return null;
    }
}
