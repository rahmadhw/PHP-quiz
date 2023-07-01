<?php  

class MenghitungLuas {
    public function luasPersegi($sisi) {
        /* Menghitung luas persegi. */
        return $sisi * $sisi;
    }

    public function luasPersegiPanjang($panjang, $lebar) {
        /* Menghitung luas persegi panjang. */
        return $panjang * $lebar;
    }

    public function luasLingkaran($jariJari) {
        /* Menghitung luas lingkaran. */
        return pi() * pow($jariJari, 2);
    }
}


// Membuat objek dari class MenghitungLuas
$hitungLuas = new MenghitungLuas();

// Menghitung luas persegi dengan sisi 4
$luasPersegi = $hitungLuas->luasPersegi(4);
echo "Luas persegi: " . $luasPersegi . "\n";

// Menghitung luas persegi panjang dengan panjang 5 dan lebar 3
$luasPersegiPanjang = $hitungLuas->luasPersegiPanjang(5, 3);
echo "Luas persegi panjang: " . $luasPersegiPanjang . "\n";

// Menghitung luas lingkaran dengan jari-jari 2.5
$luasLingkaran = $hitungLuas->luasLingkaran(2.5);
echo "Luas lingkaran: " . $luasLingkaran . "\n";