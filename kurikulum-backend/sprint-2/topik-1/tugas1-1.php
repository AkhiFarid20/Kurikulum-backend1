<?php

 class PelayananSirkulasi {
    protected $judul,
              $penulis,
              $penerbit,
              $TahunTerbit,
              $JumlahHalaman,
              $isbn,

    public function __construct($judul = "indonesiaku", $penulis = "farid", $penerbit = "BalaiPusaka", $TahunTerbit = "2002", $JumlahHalaman = "65",
    $isbn = "0001357924681"){ 
        $this->judul = $judul;
        $this->$penulis = $penulis;
        $this->$penerbit = $penerbit;
        $this->$TahunTerbit = $TahunTerbit;
        $this->$JumlahHalaman = $JumlahHalaman;  
        $this->$isbn = $isbn;
    }    
    
    public function getlablel(){
        return "$this->penulis, $this->penerbit";
    }

}


class Pengujung extends PelayananSirkulasi{
    public function peminjamman(PelayananSirkulasi$buku){
        $str = "({$buku->judul}) | {$buku->getlable()} {$buku->penulis}";
    return $str;
    }
    
}


echo "buku : ".$buku->getlablel();

$StrukPeminjamman = new pengujung();
echo $StrukPeminjamman->peminjamman($buku);