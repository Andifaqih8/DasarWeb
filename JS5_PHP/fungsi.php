<?php

 function perkenalan(){
     echo "Assalamualaikum, ";
     echo "Perkenalkan, nama saya Faqihf<br/>";
     echo "Senang berkenalan dengan Anda<br/>";
 }

 perkenalan();
 perkenalan();

/**Soal 1
 * Kode tersebut menggunakan fungsi dengan kata kunci function, dan memanggil fungsinya 2x.
 */

 function perkenalan($nama, $salam){
     echo $salam.", ";
     echo "Perkenalkan, nama saya ".$nama."<br/>";
     echo "Senang berkenalan dengan Anda<br/>";
 }

 perkenalan("Faqih","Hallo");

 echo "<hr>";

 $saya = "Faqih";
 $ucapanSalam = "Selamat pagi";

 perkenalan($saya, $ucapanSalam);

/** Soal 2
 * Kode tersebut menggunakan parameter, dan melakukan pemanggilan fungsi 2x dengan argumen yang berbeda.
 */

  function perkenalan($nama, $salam="Assalamualaikum"){
     echo $salam.", ";
     echo "Perkenalkan, nama saya ".$nama."<br/>";
     echo "Senang berkenalan dengan Anda<br/>";
 }

 perkenalan("Faqih","Hallo");

 echo "<hr>";

 $saya = "Faqih";
 $ucapanSalam = "Selamat pagi";

 perkenalan($saya);

/** Soal 3
 * Kode tersebut pada parameter salam menggunakan nilai default.
 */

  function hitungUmur($thn_lahir, $thn_sekarang){
     $umur = $thn_sekarang - $thn_lahir;
     return $umur;
  }

  echo "Umur saya adalah ".hitungUmur(2003, 2024)."tahun"

/** Soal 4
 *  Kode tersebut membuat fungsi untuk menghitung umur dengan menggunakan 2 parameter dan operator – untuk mengurangi tahun sekarang dan tahun lahir.
 */

 function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
 }
 function perkenalan ($nama, $salam="Assalamualaikum"){
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    echo "Saya berusia ". hitungUmur(2003, 2024)." tahun<br/>";
    echo "Senang berkenalan dengan anda<br/r>";
 }

 perkenalan ("Faqih");

 /** Soal 5
  * Terdapat assalamualaikum dari parameter salam, lalu umur yang dihitung menggunakan fungsi hitung umur dengan argumen 2003-2024.
  */
?>