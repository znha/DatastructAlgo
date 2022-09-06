<?php

function recursiveBinarySearch($arr, $target)
{
    if (count($arr) == 0) {
        return false;
    }
    else {
        $mid = floor(count($arr) / 2);
        if ($arr[$mid] == $target) {
            return true;
        }
        else {
            if ($arr[$mid] < $target) {
                return recursiveBinarySearch(array_slice($arr, $mid + 1), $target);
            } else {
                return recursiveBinarySearch(array_slice($arr, 0, $mid ), $target);

            }
        }
    }

}


function verify($state) {
    if(!$state) {
        echo "Target not found ";
    } else {
        echo "Target found ";
    }
} 

// Driver code;
$arr = [1, 5, 9, 40, 60, 80, 100];
$target = 60;
verify(recursiveBinarySearch($arr, $target));