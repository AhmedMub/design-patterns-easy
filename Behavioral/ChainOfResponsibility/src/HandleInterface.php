<?php

namespace DesignPatternEasy\Behavioral\ChainOfResponsibility;

interface HandleInterface
{
    public function setNext(Handler $handler);

    public function handle(Request $request);
}
