<?php
function searchLineary($arr, $target)
{
    $len =count($arr);
    for ($i = 0; $i < $len; $i++) {
        if ($arr[$i] == $target) {
            return $i;
        }
    }
    return;
}

// Driver code

$arr = [1, 5, 9, 40, 60, 12, 50];
$target = 60;
echo searchLineary($arr, $target);