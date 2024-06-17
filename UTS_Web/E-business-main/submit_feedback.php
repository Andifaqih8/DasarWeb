<?php

setcookie('language', 'en', time() + (86400 * 30), '/');

// Mengakses cookies yang disimpan
if(isset($_COOKIE['language'])) {
    echo "Preferred language: " . $_COOKIE['language'];
} else {
    echo "No language preference set.";
}

// Ambil data dari formulir
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Lakukan koneksi ke database
$conn = mysqli_connect("localhost", "username", "password", "nama_database");

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Persiapkan pernyataan SQL untuk menyimpan data
$sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";

// Eksekusi pernyataan SQL
if (mysqli_query($conn, $sql)) {
    echo "Umpan balik berhasil disimpan.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Tutup koneksi ke database
mysqli_close($conn);
?>
