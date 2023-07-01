<?php 


class HitungLuas {

    protected $luas = $luas;
    protected $lebar = $lebar;
    protected $tinggi = $tinggi;
    protected $sisi = $sisi;

    function perhitungan($p, $l) {
        return $p * $l;
    }

    function persegi(){
        return $this->perhitungan(15, 10);
    }

    function persegiPanjang(){
        return $this->perhitungan(15,10);
    }

    function luasLingkaran() {
        return $this->perhitungan(15, 10);
    }
}


$luas = new HitungLuas;
$persegi = $luas->persegi();
$persegiPanjang = $luas->persegiPanjang();
$luaslingkaran = $luas->luasLingkaran();
echo 'Hasil luas Persegi ' . $persegi . '<br>';
echo 'Hasil Luas Persegi Panjang: ' . $persegiPanjang . ' Cm' . '<br>';
echo 'Hasil Luas Lingkaran: ' . $luaslingkaran ;
