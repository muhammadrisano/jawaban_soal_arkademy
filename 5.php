<?php


function prosesData($kata_in, $string_in)
{

    $jumlah_kata = 0;
    $arr_string = str_split($string_in);
    $jml_karaketer_kata = strlen($kata_in);
    $jml_arr_string = count($arr_string);
    // proses mencari kata dari kiri
    for ($i = 0; $i <= ($jml_arr_string - $jml_karaketer_kata); $i++) {
        $kata = "";
        for ($j = $i; $j < ($i + $jml_karaketer_kata); $j++) {
            $kata .= $arr_string[$j];
        }
        if ($kata == $kata_in) {
            $jumlah_kata += 1;
        }
    }

    return $jumlah_kata;
}



if (isset($_POST['proses'])) {

    $nilai_dari_kiri = prosesData($_POST['kata'], $_POST['string']);
    $nilai_dari_kanan = prosesData($_POST['kata'], strrev($_POST['string']));
    $jumlah = $nilai_dari_kanan + $nilai_dari_kiri;
    echo "Jadi data yang ditemuka " . $jumlah . " kali";
}
?>
<h4>Mencari Jumlah Kata dalam suatu string</h4>
<form action="" method="post">
    <label for="string">Masukan string </label><input type="text" name="string" id="string"><br><br> <label for="kata">Masukan kata</label><input type="text" name="kata" id="kata">
    <br>
    <button type="submit" name="proses">Proses</button>
</form>
