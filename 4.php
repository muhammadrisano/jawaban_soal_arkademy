<?php

$bilangan_array = [6, 22, 34, 15, 2, 13, 26, 57, 42, 32];

$nilai_min = min($bilangan_array);
$nilai_max = max($bilangan_array);

// $ascending =;
// $descending = rsort($bilangan_array);

sort($bilangan_array);


echo "bilangan terkecil =" . $nilai_min . "<br/>";
echo "bilangan terbesar =" . $nilai_max . "<br/>";
sort($bilangan_array);
echo "Ascending Sort = " . implode(', ', $bilangan_array) . "<br>";
rsort($bilangan_array);
echo "Ascending Sort = " . implode(', ', $bilangan_array) . "<br>";
