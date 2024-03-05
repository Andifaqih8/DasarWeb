<?php

/*
 SOAL NO 4.1 mengonversi nilai numerik ke dalam bentuk nilai huruf berdasarkan rentang nilai tertentu
 */
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik <= 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik <= 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

/**
 * SOAL NO.4.2 menggunakan loop while untuk menghitung berapa hari atlet memerlukan waktu untuk mencapai jarak target sebesar 500 kilometer. 
 */
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
/**
 * Menampilkan pesan yang berisi informasi bahwa atlet tersebut memerlukan berapa hari untuk mencapai jarak 500 kilometer.
 */
echo "<br><br>Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer";

/**
 * menggunakan loop for untuk menghitung jumlah buah yang akan dipanen berdasarkan beberapa parameter.
 */
$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}
/**
 * Menampilkan pesan yang berisi informasi tentang jumlah buah yang akan dipanen. Nilai ini dihitung berdasarkan jumlah lahan, tanaman per lahan, dan buah per tanaman.
 */
echo "<br><br>Jumlah buah yang akan dipanen adalah: $jumlahBuah";
