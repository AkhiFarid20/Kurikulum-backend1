<?php 
 
// $angka = 1357802468012;
// $explode =explode('0', $angka);
// //$split = str_split($angka);

// //print_r($explode);
// foreach( $explode as $key => $value) {
//     $split[] = str_split($explode[$key]);
//     sort($split[$key]);
// }
// $result = array_merge(...$split);
// print_r($split);
// print_r($result);





echo "mau input berapa santri ?";
$jumlah = trim(fgets(STDIN));
 
for ($i=0; $i <$jumlah ; $i++) { 
    echo "nama : ";
    $data['nama'] = trim(fgets(STDIN));
    echo "nik : ";
    $data['nik'] = trim(fgets(STDIN));
    echo "jurusan : ";
    $data['jurusan'] = trim(fgets(STDIN));
    echo "devisi : ";
    $data['devisi'] = trim(fgets(STDIN));
    echo "umur : ";
    $data['umur'] = trim(fgets(STDIN));


    $students[] = $data;
    print_r($students);
    echo "\n";
}
echo " santri yg minta sebagai backend ";
foreach($students as $key => value);{
    if ($value ['devisi'] == 'backend')  {
        # code...
    }
}