<?php

$uang_awal = 50000;
$harga_me = 2500;
$bonus_me = floor($uang_awal / $harga_me / 4);

$jumlah_me = ($uang_awal / $harga_me) + $bonus_me;

echo "banyaknya mie instan yang didapat oleh anak tersebut adalah " . $jumlah_me;
