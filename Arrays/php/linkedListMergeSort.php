<?php include('./linkedList.php');

function mergeSortLinkedList($linkedList)
{
    $size = $linkedList->size();
    if ($size <= 1) {
        return $linkedList;
    }

    $mid = floor($size / 2);
    $left = splitLinkedList($linkedList, 0, $mid - 1);
    $right = splitLinkedList($linkedList, $mid, $size - 1);
    $leftSorted = mergeSortLinkedList($left);
    $rightSorted = mergeSortLinkedList($right);

    return mergeLinkedList($leftSorted, $rightSorted);

}

//TODO: USE THE MID NODE TO SPLIT WHITHOUT ROUTATING THE ENTIRE LIST
// TODO : USE THE NODE AT INDEX FUNCTION OF THE LINKED LIST.
// TODO: USE ADD INSTEAD OF INSERT TO REDUCE TIME COMPLEXITY
function splitLinkedList($linkedList, $start, $end)
{
    $position = 0;
    $current = $linkedList->head;
    $newLinkedList = new LinkedList();

    while ($position < $start) {
        $current = $current->next;
        $position++;
    }
    $i = 0;
    while ($position <= $end) {
        $newLinkedList->insert($current->data, $i);
        $current = $current->next;
        $position++;
        $i++;
    }

    return $newLinkedList;
}

function mergeLinkedList($leftSorted, $rightSorted)
{

    $newLinkedList = new LinkedList();
    $i = 0;
    $j = 0;
    $currentLeft = $leftSorted->head;
    $currentRight = $rightSorted->head;
    $count = 0;

    while ($i < $leftSorted->size() && $j < $rightSorted->size()) {
        if ($currentLeft->data < $currentRight->data) {
            $newLinkedList->insert($currentLeft->data, $count);
            $currentLeft = $currentLeft->next;
            $i++;
            $count++;
        }
        else {
            $newLinkedList->insert($currentRight->data, $count);
            $currentRight = $currentRight->next;
            $j++;
            $count++;
        }
    }

    while ($i < $leftSorted->size()) {
        $newLinkedList->insert($currentLeft->data, $count);
        $currentLeft = $currentLeft->next;
        $i++;
        $count++;
    }

    while ($j < $rightSorted->size()) {
        $newLinkedList->insert($currentRight->data, $count);
        $currentRight = $currentRight->next;
        $j++;
        $count++;
    }

    return $newLinkedList;
}

// Dirver code;
$linkedList = new LinkedList();
$linkedList->add(90);
$linkedList->add(45);
$linkedList->add(20);
$linkedList->add(95);
$linkedList->add(80);
$linkedList->add(10);
// print_r($linkedList);
// print_r('*****************///////////*****************');
// print_r($secondList);
print_r('***************////////*******************');
print_r(mergeSortLinkedList($linkedList));
