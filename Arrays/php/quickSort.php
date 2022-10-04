<?php 

function quickSort($arr) {

    if(count($arr) <=  1) {
       return $arr;
    }    
    $lessNums = array();
    $greaterNums = array();

    $pivot = $arr[0];
    for($i = 0; $i < count($arr); $i++) {
        if($arr[$i] <= $pivot) {
            array_push($lessNums,$arr[$i]);
        } else {
            array_push($greaterNums,$arr[$i]);     
        }
    }
    return array_merge(quickSort($lessNums), [$pivot],quickSort($greaterNums));
    
 }

 print_r(quickSort([4, 1, 10, 3]));