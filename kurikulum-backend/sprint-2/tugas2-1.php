<?php

class Rumus{
    public static $width = 6,
                  $length= 6,
                  $π = 3.14,
                  $j = 7,
                  $a = 6,
                  $b = 4,
                  $t = 4;
    public static function Luas_PersegiPanjang() {
        
        return self::$width * self::$length;
    }
    
    public static function luas_lingkaran() {
       return self::$π * self::$j * self::$j;
    }
    public static function luas_trapesium() {
        return 0.5 * (self::$a + self::$b) * self::$t;
    }
}
$hasil = new Rumus;
echo "================================"."\n";
echo "   hasil luas persegi panjang   "."\n";
echo "================================"."\n";
echo "hasilnya : ".$hasil->Luas_PersegiPanjang()."\n";
echo "\n";
echo "========================="."\n";
echo "   hasil luas lingkaran  "."\n";
echo "========================="."\n";
echo "hasilnya : ".$hasil->luas_lingkaran()."\n";
echo "\n";
echo "========================="."\n";
echo "   hasil luas trapesium  "."\n";
echo "========================="."\n";
echo "hasilnya : ".$hasil->luas_trapesium()."\n";