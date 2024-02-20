<?php 
function getSecondLargest($arr) {
    rsort($arr);
    return $arr[1];
}
$number = [10, 5, 8, 15, 3];
echo "Nilai terbesar kedua dari array adalah:" . getSecondLargest($number);

?>