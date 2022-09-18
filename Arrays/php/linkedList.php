<?php

class Node
{
    public $data;
    public $next;

    function __construct($data)
    {
        $this->data = $data;
    }


}

// driver code
$firstNode = new Node(10);
$secondNode = new Node(20);
$firstNode->next = $secondNode;
//var_dump($firstNode);


class LinkedList
{
    public $head;
    function __construct()
    {
        $this->head = null;
    }

    function isEmpty()
    {
        return $this->head === null;
    }

    function size()
    {
        $count = 0;
        $current = $this->head;
        while ($current) {
            $count++;
            $current = $current->next;
        }
        return $count;
    }

    function add($data)
    {
        $newNode = new Node($data);
        $newNode->next = $this->head;
        $this->head = $newNode;
    }

    function search($target)
    {
        $current = $this->head;
        while ($current) {
            if ($current->data == $target) {
                return true;
            }
            $current = $current->next;
        }
        return false;
    }

    function insert($data, $position)
    {
        if ($position == 0) {
            $this->add($data);
            return;
        }

        $current = $this->head;
        $index = $position;

        while ($index > 1) {
            $current = $current->next;
            $index -= 1;
        }

        $prev = $current;
        $next = $current->next;

        $newNode = new Node($data);
        $prev->next = $newNode;
        $newNode->next = $next;

        return;
    }


    function remove($data)
    {
        $current = $this->head;
        $previous = $this->head;
    
        while ($current) {

            if ($current->data != $data) {
                $previous = $current;
                $current = $current->next;
            } else {
                $previous->next = $current->next;
                return $current;
            }
        }
    }

    function removeAtIndex($index)
    {
        $current = $this->head;
        if($index == 0) {
            $this->head = $current->next;
            return $current;
        }

        $position = $index;
        while ($position > 1 ) {
            $current = $current->next;
            $position -= 1;  
        }

        $node = $current->next;
        $current->next = $node->next;

        return $node;

    }

    function nodeAtIndex($index) {
        $current = $this->head;
        $position = 0;
        while ($position != $index ) {
            $current = $current->next;
            $position++;
        }
        return  $current;
    }
}

//drivercode
$firstLinkedList = new LinkedList();
$firstLinkedList->add(10);
$firstLinkedList->add(20);
// var_dump($firstLinkedList);
// var_dump($firstLinkedList->isEmpty());
// var_dump($firstLinkedList->size());
// var_dump($firstLinkedList->search(20));
// var_dump($firstLinkedList->search(30));
$firstLinkedList->insert(45, 0);
 var_dump($firstLinkedList);
 var_dump('*****************************************');
// $firstLinkedList->remove(45);
// var_dump($firstLinkedList);

// $firstLinkedList->removeAtIndex(0);
// var_dump($firstLinkedList);


var_dump($firstLinkedList->nodeAtIndex(2));

