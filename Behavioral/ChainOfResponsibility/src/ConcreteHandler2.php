<?php

namespace DesignPatternEasy\Behavioral\ChainOfResponsibility;


class ConcreteHandler2 extends Handler
{
    public function handle(Request $request)
    {
        if ($request->getType() !== "type2") {
            return parent::handle($request);
        }

        //to handle the logic here
        return "handled by handler 2";
    }
}
