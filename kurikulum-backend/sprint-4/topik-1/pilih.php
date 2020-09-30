<?php

$pilih = [
    [
        "barang" => "data",
        "barang2" => "daftar"
    ],
]

?>
<DOCTYPE html>
<html>
<head>
    <title>pilih</title>
</head>
<body>
    <h1>Daftar Santri Baru 2020</h1>
    <a href="login.php">logout</a>
<ul>
<?php foreach($pilih as $produk ) : ?>
    <li><a href="post2.php"><?= $produk["barang"];?></a></li>
    <li> <a href="get2.php"><?= $produk["barang2"];?></a></li>
<?php endforeach; ?>
</ul>
</body>
</html>