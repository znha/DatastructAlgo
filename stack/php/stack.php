<?php

require('../../linkedlists/php/linkedList.php');

class Stack
{

     private $stack;

    function __construct()
    {
        $this->stack =  new LinkedList();
    }

    function isEmpty()
    {
        return $this->size() === 0;

    }

    function size()
    {
        return $this->stack->size();
    }

    function push($data)
    {
        $this->stack->add($data);
    }

    function pop()
    {
        return !$this->isEmpty() ? $this->stack->removeAtIndex(0) : null;
    }


}


// driver code:

$stack = new Stack();
var_dump($stack->isEmpty());
var_dump($stack->size());
$stack->push(20);
$stack->push(30);
$stack->push(40);
print_r($stack);
var_dump($stack->size());
print_r($stack->pop());
var_dump($stack->isEmpty());
var_dump($stack->size());

