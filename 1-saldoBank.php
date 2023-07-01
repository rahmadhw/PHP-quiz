<?php
$saldo = 1572250;
$pecahan = array(100000, 50000, 20000, 5000, 100, 50);
$jumlah_pecahan = [];

foreach ($pecahan as $nominal) {
    $jumlah = floor($saldo / $nominal);
    $saldo %= $nominal;
    $jumlah_pecahan[$nominal] = $jumlah;
}

foreach ($jumlah_pecahan as $nominal => $jumlah) {
    echo "Jumlah uang pecahan Rp. " . number_format($nominal) . " adalah " . $jumlah . " lembar" .  '<br>' . PHP_EOL;
}
?>
