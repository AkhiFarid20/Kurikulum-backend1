<?php
class post {

    protected $servername = "localhost",
    $username = "Farid",
    $password = "farid1453";

    public function __construct() {
        $this->connect = new PDO("mysql:host=$this->servername; dbname=barang", $this->username, $this->password);
    }

    public function getdata() {
        $query = "SELECT * FROM barang";
        $show = $this->connect->prepare($query);
        $show->execute();
        $result = $show->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function inputData($barang, $total){
        $query = "INSERT INTO barang(barang,total) VALUES('$barang','$total');";
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
    <h1>Masuk barang!</h1>
    <form action="" method="post">
        <label for="nama">Nama Barang :</label>
        <input type="text" name="barang" id="nama" placeholder="barang"><br>
        <label for="nama">total :</label>
        <input type="text" name="total" id="nama" placeholder="total"><br>
        <input type="submit" name="submit" value="kirim">
    </form>
    <?php 
        if(isset($_POST['submit'])){
            $barang = $_POST['barang'];
            $total = $_POST['total'];

            $kelas->inputData($barang, $total);
        }
    ?>

    <table border="1px">
        <thead>
            <tr>
                <th>ID.</th>
                <th>Nama Barang</th>
                <th>total</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                
                $data = $kelas->getdata();
                foreach($data as $key => $value):
            ?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['barang'] ?></td>
                    <td><?= $value['total'] ?></td>
                    <td>
                        <a href="update.php?id=<?= $value['id'] ?>">update</a>
                        <a href="delete.php?id=<?= $value['id'] ?>">delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>