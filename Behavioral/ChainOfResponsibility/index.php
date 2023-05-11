<?php
require_once __DIR__ . ("/../../vendor/autoload.php");

use DesignPatternEasy\Behavioral\ChainOfResponsibility\ConcreteHandler1;
use DesignPatternEasy\Behavioral\ChainOfResponsibility\ConcreteHandler2;
use DesignPatternEasy\Behavioral\ChainOfResponsibility\DefaultConcreteHandler;
use DesignPatternEasy\Behavioral\ChainOfResponsibility\Request;

$handler1 = new ConcreteHandler1;
$handler2 = new ConcreteHandler2;
$default = new DefaultConcreteHandler;

/*

    /-- after you instantiate the responsibility then make your preferred chain of choice
    /--  $handler1->setNextHandler($handler2)->setNextHandler($default);
*/
$handler2->setNext($handler1)->setNext($default);

$request1 = new Request("type1");
$request2 = new Request("type2");

var_dump($handler2->handle($request2));
