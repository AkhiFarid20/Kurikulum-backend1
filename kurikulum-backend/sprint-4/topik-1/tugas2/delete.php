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
    public function delete($id){
        $query = "delete from barang where id= $id";
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
</head>
<body>
    <?php
            $id = $_GET['id'];

            $kelas->delete($id);
            header('Location:post2.php');
    
    ?>