<?php

namespace DesignPatternEasy\Behavioral\ChainOfResponsibility;


class ConcreteHandler1 extends Handler
{
    public function handle(Request $request)
    {
        //check the associated type
        if ($request->getType() !== "type1") {
            return parent::handle($request);
        }

        //to handle the logic here
        return "handled by handler 1";
    }
}
