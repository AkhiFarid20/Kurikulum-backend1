<?php

echo "===================="."\n";
echo "   selamat datang   "."\n";
echo "===================="."\n";
echo "panjang : ";
$width = trim(fgets(STDIN))."\n";
echo "lebar : ";
$length = trim(fgets(STDIN))."\n";
echo "π : ";
$π = trim(fgets(STDIN))."\n";
echo "jari-jari : ";
$j = trim(fgets(STDIN))."\n";
echo "a : ";
$a = trim(fgets(STDIN))."\n";
echo "b : ";
$b = trim(fgets(STDIN))."\n";
echo "tinggi : ";
$t = trim(fgets(STDIN));
// 
Rumus::set_prop($width, $length, $π, $j, $a, $b, $t);
// 
class Rumus{
    public static $width,
                  $length,
                  $π,
                  $j,
                  $a,
                  $b,
                  $t;
    public static function set_prop($width, $length, $π, $j, $a, $b, $t) {
        self::$width = $width;
        self::$length = $length;
        self::$π = $π;
        self::$j = $j;
        self::$a = $a;
        self::$b = $b;
        self::$t = $t;
    }
     public static function Luas_PersegiPanjang() {
         
        return self::$width * self::$length;
     }
    // 
    public static function luas_lingkaran() {
        return self::$π * self::$j * self::$j;
    }
    public static function luas_trapesium() {
        return 0.5 * (self::$a + self::$b) * self::$t;
    }
}
echo "\n";
echo "=============================="."\n";
echo "   keliling persegi panjang   "."\n";
echo "=============================="."\n";
"1"; function keliling_PersegiPanjang(int $width, int $length): float
{
    if ($length === 0) {       // bebas  
        throw new Exception('panjang tidak boleh 0 '."\n");
    }
//  
    $keliling = ($width + $length) * 2;
    return $keliling;
}
echo "lebar : ";
$angka1 = trim(fgets(STDIN));
echo "panjang : ";
$angka2 = trim(fgets(STDIN));
// 
try {
    $result = keliling_PersegiPanjang($angka1, $angka2);
    echo "$angka1 + $angka2 * 2  = " . $result . "\n";
} catch (Exception $f) { // bebas
    echo "Error pada ".__FILE__." baris ke : ". $f->getLine()."\n";
    echo $f->getMessage();
}
echo "\n";
echo "========================"."\n";
echo "   keliling lingkaran   "."\n";
echo "========================"."\n";
(2); function keliling_Lingkaran(int $π, int $j): float
 {
     if ($j === 0) {       // bebas  
         throw new Exception('jari-jari tidak boleh 0 '."\n");
     }
 // 
     $keliling = 2 * ($π * $j);
     return $keliling;
 }
 echo "π : ";
 $π = trim(fgets(STDIN));
 echo "jari-jari : ";
 $j = trim(fgets(STDIN));
//   
 try {
     $result = keliling_Lingkaran($π, $j);
     echo "2 * $π * $j  = " . $result . "\n";
 } catch (Exception $f) { // bebas
     echo "Error pada ".__FILE__." baris ke : ". $f->getLine()."\n";
     echo $f->getMessage();
 }
echo "\n";
echo "========================"."\n";
echo "   keliling trapesium   "."\n";
echo "========================"."\n";
(3); function keliling_trapesium(int $ab, int $bc, int $cd, int $da): float
{
    if ($da === 0) {       // bebas  
        throw new Exception('DA tidak boleh 0 '."\n");
    }
// 
    $keliling = $ab + $bc + $cd + $da;
    return $keliling;
}
echo "AB : ";
$ab = trim(fgets(STDIN));
echo "BC : ";
$bc = trim(fgets(STDIN));
echo "CD : ";
$cd = trim(fgets(STDIN));
echo "DA : ";
$da = trim(fgets(STDIN));
// 
try {
    $result = keliling_trapesium($ab, $bc, $cd, $da);
    echo "$ab + $bc + $cd + $da = " . $result . "\n";
} catch (Exception $ex) { // bebas
    echo "Error pada ".__FILE__." baris ke : ". $e->getLine()."\n";
    echo $e->getMessage();
}
// 
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
