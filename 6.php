<?php
if (isset($_POST['proses'])) {
    $desimal = $_POST['nilai'];
    $biner = array();
    while ($desimal > 0) {

        if ($desimal % 2 == 0) {
            $desimal = $desimal / 2;
            $biner[] = 0;
        } else {
            $desimal = ($desimal - 1) / 2;
            $biner[] = 1;
        }
    }

    echo "Bilangan Biner adalah = ";
    for ($i = count($biner) - 1; $i >= 0; $i--) {
        echo $biner[$i];
    }
}
?>

<h4>Mencari bingan Biner</h4>
<form action="" method="post">
    <label for="nilai">Masukan NIlai Desimal</label><input type="text" name="nilai" id="nilai">
    <button type="submit" name="proses">Proses</button>
</form>