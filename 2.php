<?php
if (isset($_POST['proses'])) {
    $tinggi = $_POST['nilai'];
    $prima = array();
    for ($i = 1; $i <= 100; $i++) {
        $a = 0;
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $a++;
            }
        }
        if ($a == 2) {
            $prima[] = $i;
        }
    }

    for ($x = 1; $x <= $tinggi; $x++) {
        for ($y = 0; $y < $x; $y++) {
            echo $prima[$y] . " ";
        }
        echo "<br/>";
    }
}


?>

<h4>Membuat Segitiga siku-siku menggunakan bilangan prima</h4>
<form action="" method="post">
    <label for="nilai">Masukan Tinggi/Alas</label><input type="text" name="nilai" id="nilai">
    <button type="submit" name="proses">Proses</button>
</form>