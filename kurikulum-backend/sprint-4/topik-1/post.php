<?php
class post {

    protected $servername = "localhost",
    $username = "Farid",
    $password = "farid1453";

    public function __construct() {
        $this->connect = new PDO("mysql:host=$this->servername; dbname=produk", $this->username, $this->password);
    }

    public function getdata() {
        $query = "SELECT * FROM produk";
        $show = $this->connect->prepare($query);
        $show->execute();
        $result = $show->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function inputData($barang, $harga){
        $query = "INSERT INTO produk(produk,harga) VALUES('$barang',$harga);";
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
    <h1>Toko Produk</h1>
    <form action="" method="post">
        <label for="nama">Nama Barang :</label>
        <input type="text" name="barang" id="nama" placeholder="barang"><br>
        <label for="nama">Harga :</label>
        <input type="text" name="harga" id="nama" placeholder="harga"><br>
        <input type="submit" name="submit" value="kirim">
    </form>
    <?php 
        if(isset($_POST['submit'])){
            $barang = $_POST['barang'];
            $harga = $_POST['harga'];

            $kelas->inputData($barang, $harga);
        }
    ?>

    <table border="1px">
        <thead>
            <tr>
                <th>ID.</th>
                <th>Nama Barang</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php
                
                $data = $kelas->getdata();
                foreach($data as $key => $value):
            ?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['produk'] ?></td>
                    <td><?= $value['harga'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>