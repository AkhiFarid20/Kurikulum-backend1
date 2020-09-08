<?php
for ($i=1; $i<=10; $i++) {
    for ($j=10; $j>=$i; $j--) {
        echo "- ";
    }for ($k=$i; $k>=1; $k--) {
        echo "+";
    }echo "<br>";
}
?>