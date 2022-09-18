<?php
function mergeSort($arr)
{
    if (count($arr) <= 1) {
        return $arr;
    }
    $mid = floor(count($arr) / 2);
    $left = mergeSort(array_slice($arr, 0, $mid));
    $right = mergeSort(array_slice($arr, $mid));

    return merge($left, $right);

}

function merge($left, $right)
{
    $mergedArr = array();
    $i = 0;
    $j = 0;

    while ($i < count($left) && $j < count($right)) {
        if ($left[$i] < $right[$j]) {
            array_push($mergedArr, $left[$i]);
            $i++;
        }
        else {
            array_push($mergedArr, $right[$j]);
            $j++;
        }
    }
    while ($i < count($left)) {
        array_push($mergedArr, $left[$i]);
        $i++;
    }
    while ($j < count($right)) {
        array_push($mergedArr, $right[$j]);
        $j++;

    }

    return $mergedArr;
}

// Dirver code;
$arr = [80,40,15,99, 75, 30, 50 , 20];
var_dump(mergeSort($arr));
