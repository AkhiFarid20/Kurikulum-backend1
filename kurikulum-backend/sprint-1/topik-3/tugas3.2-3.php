<html>
    <head>
        <title>Membuat Jam Pasir</title>
    </head>

    <body>
        <div align="center">
            <form method="POST">
                <table width="500px" style="border:2px solid gray; border-radius:5px;">
                    <tr>
                        <th colspan="2">Membuat Jam Pasir<hr></th>
                    </tr>
                    <tr align="left">
                        <th>masukan angka</th>
                        <th align="right"><input type="text" name="input" placeholder="Masukkan Nilai"></th>
                    <tr>
                        <th colspan="2"><input type="submit" name="buat" value="Buat"></th>
                    </tr>
                    <tr><th colspan="2"><hr style="border:1px solid gray;"></th></tr>
                    <tr>
                        <th colspan="2" align="left">
                            <?php
                            error_reporting(0);
                            $n = $_POST['input'];
                            for ($i = 1; $i <= $n - 2; $i++) {
                                for ($j = 0; $j <= $i; $j++) {
                                    echo "&nbsp;&nbsp;";
                                }
                                for ($k = $i; $k < $n - 1; $k++) {
                                    echo "+";
                                }
                                for ($l = $i; $l < $n - 2; $l++) {
                                    echo "+";
                                } echo "<br ?>";
                            }
                            for ($i = 1; $i <= $n - 2; $i++) {
                                for ($j = $n - 1; $j >= $i; $j--) {
                                    echo "&nbsp;&nbsp;";
                                }
                                for ($k = 1; $k <= $i; $k++) {
                                    echo "+";
                                } for ($l = 1; $l < $i; $l++) {
                                    echo "+";
                                } echo "<br ?>";
                            }
                            ?>
                        </th>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>