<?php 

if(isset($_POST["login"])) {
    if($_POST["username"] == "farid" && $_POST["password"] == "farid123"){
        header("Location: Pilih_Produk.php");
        exit;
    }else{
        $error = true;
    } 
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>daftar.com</title>
</head>
<body>
    <h1>Login!</h1>
    <?php if(isset($error)) : ?>
        <p style="color: red; font-style: italic">username && password salah!</p>
    <?php endif; ?>
    <ul>
        <form action="pilih_produk.php" method="post">
        <li>
            <label for="username">username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <button type="submit" name="login">login</button>
        </li>
    </ul>
</body>
</html>