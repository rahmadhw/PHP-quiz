<?php 


function konversiTanggalKeTeks($tanggal)
{
    $bulanTeks = array(
        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    );

    $tanggalArr = explode('-', $tanggal);
    $tahun = $tanggalArr[0];
    $bulan = (int) $tanggalArr[1];
    $tanggal = (int) $tanggalArr[2];

    $teksTanggal = $tanggal . ' ' . $bulanTeks[$bulan - 1] . ' ' . $tahun;

    return $teksTanggal;
}


$tanggal = '2023-06-30';
$teksTanggal = konversiTanggalKeTeks($tanggal);
echo $teksTanggal;