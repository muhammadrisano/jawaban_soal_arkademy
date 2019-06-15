<?php
if (isset($_POST['proses'])) {

    $kata_kiri = $_POST['string'];
    $kata_kanan = strrev($kata_kiri);
    $cari = $_POST['kata'];
    $jumlah_kata = 0;
    $arr_kata_kiri = str_split($kata_kiri);
    $arr_kata_kanan = str_split($kata_kanan);
    $arr_cari = str_split($cari);
    $jml_arr_kata = count($arr_kata_kiri);
    $jml_arr_cari = count($arr_cari);
    // proses mencari kata dari kiri
    for ($i = 0; $i <= ($jml_arr_kata - $jml_arr_cari); $i++) {
        $kata = "";
        for ($j = $i; $j < ($i + $jml_arr_cari); $j++) {
            $kata .= $arr_kata_kiri[$j];
        }
        if ($kata == $cari) {
            $jumlah_kata += 1;
        }


        // var_dump($kata);
    }

    // proses mencari kata dari kanan
    for ($i = 0; $i <= ($jml_arr_kata - $jml_arr_cari); $i++) {
        $kata = "";
        for ($j = $i; $j < ($i + $jml_arr_cari); $j++) {
            $kata .= $arr_kata_kanan[$j];
        }
        if ($kata == $cari) {
            $jumlah_kata += 1;
        }


        // var_dump($kata);
    }
    echo "data ditemukan " . $jumlah_kata . " kali";
}
?>
<h4>Mencari Jumlah Kata dalam suatu string</h4>
<form action="" method="post">
    <label for="string">Masukan string </label><input type="text" name="string" id="string"><br><br> <label for="kata">Masukan kata</label><input type="text" name="kata" id="kata">
    <br>
    <button type="submit" name="proses">Proses</button>
</form>