<?php

$loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu condimentum odio. 
                Suspendisse potenti. Vivamus lobortis eu augue id sagittis. Curabitur congue sollicitudin tellus sit amet aliquet. 
                Duis fermentum, elit non sollicitudin porttitor, augue tellus porta dui, at eleifend diam elit in diam.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) ."<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";

/** Soal 9
 * -	Fungsi strlen() berfungsi mengembalikan jumlah karakter, fungsi str_wor_count() menghitung jumlah kata, 
 * fungsi strtoupper() berfungsi untuk mengubah menjadi huruf kapital, dan fungsi strtolower() untuk mengubah karakter menjadi huruf kecil
 */
?>