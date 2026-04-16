<?php
$nama = "Evril";
$umur = 20;
$tinggi = 177.9;
$menikah = false;
$hobi = ["membaca novel dan manhwa","bermain game"];

echo "nama saya $nama, umur saya $umur tahun, tinggi saya $tinggi cm, saya belum menikah, dan hobi saya adalah $hobi[0], dan $hobi[1]";

echo "<br><br>==============================<br><br>";

//OPERATOR
$nilai1 = 5;
$nilai2 = 8;
$nilai3 = 10;
$nilai4 = 20;
$nilai5 = 13;

$hasil = $nilai1 + $nilai2 - $nilai3 * $nilai4 /$nilai5;

echo "hasil dari $nilai1 + $nilai2 - $nilai3 * $nilai4 /$nilai5 adalah $hasil";

echo "<br><br>==============================<br><br>";

//PERCABANGAN
$nilai = 80;

if ($nilai >= 80)
    echo "nilai anda adalah $nilai, anda mendapatkan nilai A (Sangat Baik)";
else if ($nilai >=70)
    echo "nilai anda adalah $nilai, anda mendapatkan nilai B (Baik)";
else if ($nilai >=60)
    echo "nilai anda adalah $nilai, anda mendapatkan nilai C (Cukup";
else if ($nilai >=50)
    echo "nilai anda adalah $nilai, anda mendapatkan nilai D (Kurang)";
else if ($nilai >=40)
    echo "nilai anda andalah $nilai, anda mendapatkan nilai E (Hampir Tidak Lulus)";
else
    echo "nilai anda adalah $nilai, anda mendapatkan nilai F (Tidak Lulus)";

?>