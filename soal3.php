<?php
function hitung_isi($string, $target) {
    $hasil = 0;
    $start = 0;
    while(1) {
        $found = strpos($string, $target, $start);
        if($found !== FALSE) {
            $hasil++;
            $start = $found + 1;
        } else return $hasil;
    }
    return $hasil;
}
$mystring = 'jgffknjbfaaaajadfdghca';
$cari = 'a';

echo hitung_isi($mystring, $cari);
