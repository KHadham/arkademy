<?php
function generatorstring($length) {
    $karakter = '0123456789abcdefghijklmnopqrstuvwxyz';
    $panjang_karakter = strlen($karakter);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $karakter[rand(0, $panjang_karakter - 1)];
    }
    return $randomString;
}
echo generatorstring(55);
?>
