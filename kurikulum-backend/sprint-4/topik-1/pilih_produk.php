<?php

$pilih = [
    [
        "produk1" => "beli",
    ],
    [
        "produk2" => "keranjang"
    ]
]

?>
<DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Santri Baru 2020</h1>
    <a href="login.php">logout</a>
<ul>
<?php foreach($pilih as $produk ) : ?>
    <li>
        <a href="post.php"><?= $produk["produk1"];?></a>
    </li>
    <li>
    <a href="get.php"><?= $produk["produk2"];?></a>
    </li>
<?php endforeach; ?>
</ul>
</body>
</html>