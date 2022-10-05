<?php

class Node
{
    public $data;
    public $next;
    public $prev;

    function __construct($data)
    {
        $this->data = $data;
    }
}
class DoublyLinkedList
{
    public $head;
    public $tail;


    function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }

    function isEmpty()
    {
        return is_null($this->head);
    }

    function size()
    {
        $current = $this->head;
        $count = 1;

        while ($current != $this->tail) {
            $count++;
            $current = $current->next;
        }

        return $count;
    }

    function add($data)
    {
        $node = new Node($data);
        if ($this->isEmpty()) {
            $this->head = $node;
            $this->tail = $node;
            return;
        }

        $current = $this->head;
        $node->next = $current;
        $current->prev = $node;
        $this->head = $node;

    }

    function append($data)
    {
        $node = new Node($data);
        if ($this->isEmpty()) {
            $this->head = $node;
            $this->tail = $node;
            return;
        }

        $current = $this->tail;
        $current->next = $node;
        $node->prev = $current;
        $this->tail = $node;
    }

    function search($target)
    {

        $current =  $this->head;
        if( $this->tail->data == $target) {
            return true;
        }
        while($current != $this->tail) {
            if($current->data == $target) {
                return true;
            }
            $current = $current->next;
        }
        return false;

}
    function remove()
    {
        $lastNode = $this->tail;
        $prevNode = $lastNode->prev;
        $prevNode->next = null;
        $this->tail = $prevNode;
        return $lastNode;
    }
    function nodeAtIndex($index)
    {
    }

    function removeAtIndex($index)
    {

    }
}


/** Driver code */
$doublyLinkedList = new DoublyLinkedList();
$doublyLinkedList->add(10);
$doublyLinkedList->add(20);
$doublyLinkedList->append(30);

// var_dump($doublyLinkedList->isEmpty());
// var_dump($doublyLinkedList->size());
// var_dump($doublyLinkedList->search(30));
// var_dump($doublyLinkedList->search(10));
// var_dump($doublyLinkedList->search(20));
// var_dump($doublyLinkedList->search(50));
// var_dump($doublyLinkedList->search(0));
var_dump($doublyLinkedList->remove());
print_r($doublyLinkedList);
