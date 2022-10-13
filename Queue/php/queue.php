<?php 

include '../../linkedlists/php/linkedList.php';

class Queue{
    private $queue;
    function __construct()
    {
        $queue = new LinkedList();
    }

    function isEmpty() {
        return $this->queue->isEmpty();
    }

    function size(){
        return $this->queue->size();
    }

    function enqueue($data) {
        $this->queue->insert($data,$this->size()-1);
    }

    function dequeue() {
        return $this->queue->removeAtIndex($this->size()-1);
    }

    function peek() {
        return $this->queue->head;
    }

    function contains($target) {
        return $this->queue->search($target);
    }
}