<?php
$angka = 5956560159466056;
 $explode =explode('0', $angka);
 //$split = str_split($angka);
 print_r($explode) ;
 foreach( $explode as $key => $value) {
 $split[] = str_split($explode[$key]);
 sort($split[$key]);
 }
 $result = array_merge(...$split);
 print_r($split);
 print_r($result);
