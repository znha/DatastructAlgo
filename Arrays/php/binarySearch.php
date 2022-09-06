<?php 
function binarySearch($arr, $target) {
    $first = 0;
    $last = count($arr) - 1;
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

function verify($index) {
    if($index == NULL) {
        echo "Target not found ";
    } else {
        echo "Target fount at index: " . $index;
    }
} 

// Driver code;
$arr = [1, 5, 9, 40, 60, 80, 100];
$target = 60;
verify(binarySearch($arr, $target));
