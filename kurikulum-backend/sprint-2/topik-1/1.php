<?php

class OparasiHitung {
    protected $oparator = [
        'tambah' => '+', 
        'kurang' => '-', 
        'perkalian' => '*', 
        'pembagian' => '/',
    ];

    public function penjumlahan($angka, $bilangan) {
        $hasil = $angka+$bilangan;
        return $angka.$this->oparator['tambah'].$bilangan."= ". $hasil;
    }
    public function pengurangan($angka, $bilangan) {
        $hasil = $angka-$bilangan;
        return $angka.$this->oparator['kurang']. $bilangan."= ". $hasil;
    }
    public function perkalian($angka, $bilangan) {
        $hasil = $angka*$bilangan;
        return $angka.$this->oparator['kali']. $bilangan."= ". $hasil;
    }
    public function pembagian($angka, $bilangan) {
        $hasil = $angka/$bilangan;
        return $angka.$this->oparator['bagi']. $bilangan."= ". $hasil;
    }
}
$hitung = new OparasiHitung;

echo "hasil dari ".$hitung->penjumlahan(5, 3),"\n";