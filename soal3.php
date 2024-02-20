<?php 
function getTrafficLightCOlor($callcount) {
    $color = ['merah','kuning','hijau'];
    $index = ($callcount -1)%count($color);
    return $color[$index];
}

echo getTrafficLightCOlor(1);
echo getTrafficLightCOlor(2);
echo getTrafficLightCOlor(3);
echo getTrafficLightCOlor(4);

?>