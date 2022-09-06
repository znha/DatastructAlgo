<?php 
function binarySearch($arr, $target) {
    $first = 0;
    $last = count($arr);
    while($first <= $last) {
        $mid = floor(($first + $last ) / 2 );
        if($arr[$mid] == $target) {
            return $mid;
        } else if($arr[$mid] < $target) {
            $first = $mid + 1;
        } else {
            $last = $mid - 1;
        }
    }

    return null;

}