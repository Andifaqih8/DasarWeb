<?php

 function perkenalan(){
     echo "Assalamualaikum, ";
     echo "Perkenalkan, nama saya Faqihf<br/>";
     echo "Senang berkenalan dengan Anda<br/>";
 }

 perkenalan();
 perkenalan();

 //membuat fungsi
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


  function hitungUmur($thn_lahir, $thn_sekarang){
     $umur = $thn_sekarang - $thn_lahir;
     return $umur;
  }

  echo "Umur saya adalah ".hitungUmur(2003, 2024)."tahun"

 function perkenalan ($nama, $salam="Assalamualaikum"){
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    echo "Saya berusia ". hitungUmur(2003, 2024)." tahun<br/>";
    echo "Senang berkenalan dengan anda<br/r>";
 }

 perkenalan ("Faqih");

?>