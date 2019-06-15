<?php
if (isset($_POST['proses'])) {
    $x = $_POST['nilai_awal'];
    $y = $_POST['tahun'];



    for ($i = 1; $i <= $y; $i++) {
        $x = $x * 2 + 1;
    }
    echo "Maka Tinggi Pohon adalah " . $x . " Meter";
}
?>

<h4>Mencari Tinggi Pohon</h4>
<form action="" method="post">
    <label for="nilai_awal">Masukan Tinggi Awal </label><input type="text" name="nilai_awal" id="nilai_awal">Meter<br><br> <label for="tahun">Masukan Lama Tahun</label><input type="text" name="tahun" id="tahun"> Tahun
    <br>
    <button type="submit" name="proses">Proses</button>
</form>