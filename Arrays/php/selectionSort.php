<?php

function selectionSort($arr)
{
    $sortedArr = array();
    while (count($arr) != 0) {
        // find min     
        $minIndex = findMinInAnArray($arr);
        // move it form the first array to the sorted array
        $min = array_splice($arr, $minIndex, 1);
        array_push($sortedArr, $min);

    }
    return $sortedArr;

}

function findMinInAnArray($arr)
{
    $minIndex = 0;
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$minIndex] > $arr[$i]) {
            $minIndex = $i;
        }
    }
    return $minIndex;
}


print_r(selectionSort([4, 1, 10, 3]));