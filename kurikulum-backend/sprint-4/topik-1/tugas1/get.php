<?php
class post {

    protected $servername = "localhost",
    $username = "Farid",
    $password = "farid1453";

    public function __construct() {
        $this->connect = new PDO("mysql:host=$this->servername; dbname=produk", $this->username, $this->password);
    }

    public function getdata() {
        $query = "SELECT * FROM produk2";
        $show = $this->connect->prepare($query);
        $show->execute();
        $result = $show->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function inputData($namaKurir, $namaPengirim, $asalBarang, $tujuanBarang){
        $query = "INSERT INTO produk2(namaKurir, namaPengirim, asalBarang, tujuanBarang) VALUES('$namaKurir', '$namaPengirim', '$asalBarang', '$tujuanBarang');";
        $insert = $this->connect->prepare($query);
        $insert->execute();
    }
}
$kelas = new post; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>selamat datang!</title>
</head>
<body>
    <h1>daftar produk</h1>
    <form action="" method="get">
        <label for="nama">nama Kurir :</label>
        <input type="text" name="namaKurir" id="nama" placeholder="nama"><br>
        <label for="nama">nama Pengirim :</label>
        <input type="text" name="namaPengirim" id="nama" placeholder="nama"><br>
        <label for="nama">asal Barang :</label>
        <input type="text" name="asalBarang" id="nama" placeholder="asal"><br>
        <label for="nama">tujuan Barang :</label>
        <input type="text" name="tujuanBarang" id="nama" placeholder="tujuan"><br>
        <input type="submit" name="submit" value="kirim">
    </form>
    <?php 
        if(isset($_GET['submit'])){
            $namaKurir = $_GET['namaKurir'];
            $namaPengirim = $_GET['namaPengirim'];
            $asalBarang = $_GET['asalBarang'];
            $tujuanBarang = $_GET['tujuanBarang'];

            $kelas->inputData($namaKurir, $namaPengirim, $asalBarang, $tujuanBarang);
        }
    ?>

    <table border="1px">
        <thead>
            <tr>
                <th>ID.</th>
                <th>nama Kurir</th>
                <th>nama Pengirim</th>
                <th>asal Barang</th>
                <th>tujuan Barang</th>
            </tr>
        </thead>
        <tbody>
            <?php
                
                $data = $kelas->getdata();
                foreach($data as $key => $value):
            ?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['namaKurir'] ?></td>
                    <td><?= $value['namaPengirim'] ?></td>
                    <td><?= $value['asalBarang'] ?></td>
                    <td><?= $value['tujuanBarang'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>