<?php

namespace DesignPatternEasy\tests;

use DesignPatternEasy\Behavioral\ChainOfResponsibility\ConcreteHandler1;
use DesignPatternEasy\Behavioral\ChainOfResponsibility\ConcreteHandler2;
use DesignPatternEasy\Behavioral\ChainOfResponsibility\DefaultConcreteHandler;
use DesignPatternEasy\Behavioral\ChainOfResponsibility\Request;
use PHPUnit\Framework\TestCase;

class ChainOfResponsibilityTest extends TestCase
{
    private $handler1;
    private $handler2;
    private $default;
    private $request1;
    private $request2;
    private $request3;

    protected function setup(): void
    {
        parent::setUp();

        $this->handler1 = new ConcreteHandler1;
        $this->handler2 = new ConcreteHandler2;
        $this->default = new DefaultConcreteHandler;

        $this->request1 = new Request('type1');
        $this->request2 = new Request('type2');
        $this->request3 = new Request('default');

        $this->handler1->setNext($this->handler2)->setNext($this->default);
    }

    public function test_concrete_handler_One()
    {
        $this->assertEquals("handled by handler 1", $this->handler1->handle($this->request1));
    }

    public function test_concrete_handler_two()
    {
        $this->assertEquals("handled by handler 2", $this->handler1->handle($this->request2));
    }

    public function test_concrete_handler_default()
    {
        $this->assertEquals("request handled by default", $this->handler1->handle($this->request3));
    }
}
