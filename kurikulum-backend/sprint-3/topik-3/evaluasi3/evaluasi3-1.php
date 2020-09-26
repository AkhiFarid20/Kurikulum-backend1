<?php
echo "nama : ";
$nama = trim(fgetc(STDIN))."\n";
echo "umur : ";
$umur = trim(fgetc(STDIN))."\n";
echo "divisi : ";
$divisi = trim(fgetc(STDIN))."\n";

data::set_prop($nama, $umur, $divisi);

class data {
    public static $nama,
    $umur,
    $divisi;

    public static function set_prop($nama, $umur, $divisi) {
    self::$nama = $nama;
    self::$umur = $umur;
    self::$divisi = $divisi;
    }
}
class mysql extends data {

    protected $server = "localhost",
    $username = "Farid",
    $password = "farid1453";

    public function __construct() {
        $this->connect = new PDO("mysql:host=$this->server; dbaname=pondokit", $this->username, $this->password);
    }
    public function insert($nama, $umur, $divisi) {
        $insert = "insert into santri (nama, umur, divisi) values (self::$nama, self::$umur, self::$divisi)";
        $show = $this->connect->prepare($insert);
        $show->execute();
    }
    public function update($nama, $umur, $divisi) {
        $update = "update santri set $nama, $umur, $divisi where id = 26";
        $show = $this->connect->prepare($update);
        $show->execute();
    }
    public function delete($nama, $umur, $divisi) {
        $delete = "delete from santri where $nama = 26, $umur = 26, $divisi= 26 ";
        $show = $this->connect->prepare($delete);
        $show->execute();
    }
}
$koneksi = new mysql;
$koneksi->insert($nama, $umur, $divisi);
$koneksi = new mysql;
$koneksi->update($nama, $umur, $divisi);
$koneksi = new mysql;
$koneksi->delete($nama, $umur, $divisi);