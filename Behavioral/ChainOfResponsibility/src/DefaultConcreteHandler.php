<?php

namespace DesignPatternEasy\Behavioral\ChainOfResponsibility;

class DefaultConcreteHandler extends Handler
{
    public function handle(Request $request)
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }
        return "request handled by default";
    }
}
