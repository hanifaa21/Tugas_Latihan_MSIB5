<?php
// echo "Hello World"; // ini adalah contoh comentar dalam php

// latihan membuat varibale
$namaSiswa  = "Budi Santoso"; //tipe data integer
$umur = 25; // tipe data integer
$beratBadan = 30.5; //tipe data float
$_pekerjaan = 'Mahasiswa'; //tipe data integer

$jari2 = 15;
define('PHI', 3.14);

$luas = PHI * $jari2 * $jari2;

echo '<br>Nama Mahasiswa : ' .$namaSiswa;
echo '<br>Umur Mahasiswa : ' .$umur;
echo '<br>Berat Badan : ' .$beratBadan;
echo '<br>Pekerjaan : ' .$_pekerjaan;
echo '<br>Berat Badan 2 : $beratBadan KG';
echo "<br>Berat Badan 2 : $beratBadan KG" ;
print '<br>Pekerjaan : ' .$_pekerjaan;

//contoh contoh pemanggilan dalam php
?>
<hr>
<br> Siswa 1 : <?= $namaSiswa ?>
<p>Umur : <?= $umur?> </p>
<p>Luas jari jari di atas adalah <?= $luas ?> </p>