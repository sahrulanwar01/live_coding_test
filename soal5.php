<?php 
function karakterTerbanyak($kata) {
    $karakter_count = array_count_values(str_split($kata));
    arsort($karakter_count);
    $terbanyak = array_slice($karakter_count, 0,1, true);
    $karakter = key($terbanyak);
    $jumlah = current($terbanyak);
    return "$karakter $jumlah". "x" .PHP_EOL;
}

echo"kata: WELCOME" . PHP_EOL;
echo karakterTerbanyak('WELCOME');
echo"kata: STRAWBERRY" . PHP_EOL;
echo karakterTerbanyak('STRAWBERRY');

?>