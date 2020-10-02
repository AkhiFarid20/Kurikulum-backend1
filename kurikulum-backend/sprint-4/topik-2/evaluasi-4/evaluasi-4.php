<?php
class post {

    protected $servername = "localhost",
    $username = "Farid",
    $password = "farid1453";

    public function __construct() {
        $this->connect = new PDO("mysql:host=$this->servername; dbname=pondokIT", $this->username, $this->password);
    }

    public function getdata() {
        $query = "SELECT * FROM santri";
        $show = $this->connect->prepare($query);
        $show->execute();
        $result = $show->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function INSERT($nama, $asal, $divisi){
        $query = "INSERT INTO santri(nama,asal,divisi) VALUES ('$nama', '$asal', '$divisi');";
        $insert = $this->connect->prepare($query);
        $insert->execute();
    }
}
$data = new post; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT</title>
    <style ></style>
</head>
<body>
    <h1><Masukkanlah!/h1>

    <from action="" method="post">
    <ul>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" placeholder="nama">
        </li>
        <li>
            <label for="asal">Asal :</label>
            <input type="text" name="asal" id="asal" placeholder="asal">
        </li>
        <li>
            <label for="divisi">Divisi :</label>
            <input type="text" name="divisi" id="divisi" placeholder="divisi">
        </li>
        <li>
            <input type="submit" value="masukkan" name="masukkan">
        </li>
    </ul>
</from>
<?php

    if (isset($_POST["masukkan"])) {
        $nama = $_POST["nama"];
        $asal = $_POST["asal"];
        $divisi = $_POST["divisi"];

        $data->INSERT($nama, $asal, $divisi);
    }

?>

<body border="1px">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Santri</th>
            <th>Asal Santri</th>
            <th>Divisi Santri</th>
            <th>Aksi</th>
        </tr>
    </thead>
        <tbody>
            <?php
                $Data= $data->getdate();
                foreach($Data as $key => $value);
            ?>

            <tr>
                <td><?= $value['nama']?></td>
                <td><?= $value['asal']?></td>
                <td><?= $value['divisi']?></td>
                <td>
                    <a href="update.php?id=<?= $value["id"]?>">Update</a> 
                    <a href="delete.php?id=<?= $value["id"]?>">Delete</a> 
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>